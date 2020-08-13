<?php namespace Digart\spectacles\Models;

use Model;
use BackendAuth;
use DigArt\Spectacles\Models\Representation;
use Digart\spectacles\Models\Social;

/**
 * Model
 */
class Spectacle extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    protected $appends = ['periode_spectacle', 'full_url'];

    protected $jsonable = ['parties', 'liens_socials'];

    protected $slugs = ['slug' => 'titre_pincipal'];

    public $attachMany = [
        'images' => ['System\Models\File', 'public' => true],
        'technique_images' => ['System\Models\File', 'public' => true],
        'documents' => ['System\Models\File', 'public' => true],
        'technique_documents' => ['System\Models\File', 'public' => false],
    ];

    public $attachOne = [
        'affiche' => ['System\Models\File', 'public' => true]
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_spectacles_spect';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'titre_principal' => 'required',
        'slug' => ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i', 'unique:digart_spectacles_spect'],
    ];

    /**
     *  Relations
     */
    public $belongsTo = [
        'administrateur' => ['\Backend\Models\User',
                   'key' => 'admin_id'],
        'saison' => ['DigArt\Spectacles\Models\Saison',
                   'key' => 'saison_id'],               
        'institution' => ['DigArt\Spectacles\Models\Institution',
                   'key' => 'institution_id',
                   'order' => 'sort_order'],       
        'statut' => ['DigArt\Spectacles\Models\Statut',
                   'key' => 'statut_id',
                   'order' => 'sort_order'],
        'categorie' => ['DigArt\Spectacles\Models\Categorie',
                   'key' => 'categorie_id',
                   'order' => 'sort_order'],                               
        //'artiste' => ['DigArt\Spectacles\Models\Artiste'],
    // Permet d'afficher les réseaux sociaux dans le repeater "Liens réseaux sociaux"
        'social_id' => ['DigArt\Spectacles\Models\Social',
                    'key' => 'id',
                    'scope' => 'isActive']
    ];

    public $belongsToMany = [
        'genres' => [
            'DigArt\Spectacles\Models\Genre',
            'table' => 'digart_spectacles_spect_genr',
            'key' => 'spectacle_id',
            'otherKey' => 'genre_id',
            'order' => 'designation'],
        'categories' => [
            'DigArt\Spectacles\Models\Categorie',
            'table' => 'digart_spectacles_spect_cat',
            'key' => 'spectacle_id',
            'otherKey' => 'categorie_id',
            'order' => 'designation'],            
        'artistes' => [
            'DigArt\Spectacles\Models\Artiste',
            'table' => 'digart_spectacles_spect_art',
            'key' => 'spectacle_id',
            'otherKey' => 'artiste_id'],            
    ];    




    public $hasMany = [
         'representations' => ['DigArt\Spectacles\Models\Representation', 
            'key' => 'spectacle_id', 
            'order' => 'debut',
            'softDelete' => true],
         'represActives' => ['DigArt\Spectacles\Models\Representation', 
            'key' => 'spectacle_id', 
            'scope' => 'isActive'],            
         'represToutes' => ['DigArt\Spectacles\Models\Representation', 
            'key' => 'spectacle_id', 
            'scope' => 'isToutes'],              
         'souvenirs' => ['DigArt\Spectacles\Models\Souvenir', 
            'key' => 'spectacle_id', 
            'order' => 'sort_order',
            'softDelete' => true],
         'protocoles' => ['DigArt\Spectacles\Models\Protocole', 
            'key' => 'spectacle_id', 
            'order' => 'date',
            'softDelete' => true],            
    ];     


    public $hasOne = [
    // Permet de trier par les dates des représentations actives
         'latestSpectacle' => ['DigArt\Spectacles\Models\Representation', 
            'scope' => 'isActive'],     
    ]; 


    public function next(){
        // get next spectacle
        return Spectacle::where('slug', '>', $this->slug)->orderBy('id','asc')->first();

    }

    // RETIRÉ : Permet de trier par les représentations actives des spectacles
    public function zlatestSpectacle()
    {
        return $this->hasOne(Representation::class)->where('debut','>=', now())->orderBy('debut');
    }





    public function scopeprochainsSpectacles($query) {

        return $query->whereHas('represActives')
                        ->where(function($query) {
                            $query->whereHas('statut', function ($query) {
                                        $query->where('is_frontend','1');            
                            })->orWhere('statut_id', null);
                        })->with('latestSpectacle')->get()->sortBy('latestSpectacle.debut');

        } 



    public function scopeIsFrontend($query)
    {

        return $query->
            whereHas('statut', function ($query) {
                $query->where('is_frontend','1');            
            });
    }



    public function scopeAvecSouvenirs($query)
    {

        return $query->has('souvenirs');
    }




    public function getPeriodeSpectacleAttribute() {
        $debut = '';
        $fin = '';

        $periode = $this->representations;

        if ($periode->count() > 1) {
            $debut = $periode->min('debut')->format('d.m.y');
            $fin = $periode->max('debut')->format('d.m.y');

            return $debut .' au '.$fin;

        }

        if ($periode->count() == 1) {
            $debut = $periode->max('debut')->format('d.m.y');

            return $debut;
        }

        if ($periode->count() == 0) {
        
            return 'Aucune représentation';
        }

        
        #return $this->representations->last(); 
        #$this->nom. ' (' .$this->procherole->designation .' de ' . $this->eleve->prenom . ' ' .$this->eleve->nom.')' ;
    } 


    // Renvoie l'URL complète pour accéder à une page de spectacle par le slug
    public function getFullUrlAttribute() {

        $contexte = 'spectacle';
        return '/'.$contexte .'/'. $this->slug;
    }

    // Permet de mettre l'attribut admin_id par défaut à la valeur de l'administrateur connecté
/*    public function __construct(array $attributes = array()) {
        if (BackendAuth::check()) {
            $this->setRawAttributes(['admin_id' => BackendAuth::getUser()->id], true);
            parent::__construct($attributes);
        }

    }*/


    public function getTotalAlbumsAttribute()
    {
        return $this->souvenirs->count();
    }

    public function getTotalPhotosAttribute()
        {
            $total_photos = 0;
            // loop through each father
            foreach ($this->souvenirs as $souvenirs) {
                $total_photos += count($souvenirs->photos);
            }
            return $total_photos;
        }


    // Usage depuis TWIG : {{ spectacle.getSocial(artiste.designation)}}
    // Renvoie le logo des réseaux sociaux du champ repeater de l'artiste
    public function getSocial($value) {
        $social = Social::find($value);

        if ($social)
        {
            return $social->icon ;
        }
    } 

}
