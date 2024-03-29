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

    protected $jsonable = ['parties', 'liens_socials', 'cltp_flags'];

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
        'lieu' => ['DigArt\Spectacles\Models\Lieu',
                   'key' => 'lieu_id',
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


    public $morphMany = [
        'planifications' => [Planification::class,
            'name' => 'planifiable']
    ];


    public function next()
    {
        // get next spectacle
        return Spectacle::where('slug', '>', $this->slug)->orderBy('id', 'asc')->first();
    }

    // RETIRÉ : Permet de trier par les représentations actives des spectacles
    public function zlatestSpectacle()
    {
        return $this->hasOne(Representation::class)->where('debut', '>=', now())->orderBy('debut');
    }

    // Retourne les valeurs par défaut de la première institution pour le prix et la disposition
    public function getDefautDispositionAttribute()
    {
        if (Institution::first())
            return Institution::first()->defaut_disposition;
    }

    public function getDefautPrixAttribute()
    {

        if (Institution::first())
            return Institution::first()->defaut_prix;
    }


    public function getTitreCompletAttribute()
    {
        if ($this->titre_secondaire) {
            return $this->titre_principal .' - ' .$this->titre_secondaire;
        } else {
            return $this->titre_principal;
        }
    }


    public function scopeprochainsSpectacles($query)
    {

        return $query->whereHas('represActives')
                        ->where(function($query) {
                            $query->whereHas('statut', function ($query) {
                                        $query->where('is_frontend', '1');
                            })->orWhere('statut_id', null);
                        })->with('latestSpectacle')->get()->sortBy('latestSpectacle.debut');
    }



    public function scopeIsFrontend($query)
    {

        return $query->
            whereHas('statut', function ($query) {
                $query->where('is_frontend', '1');
            })->whereHas('represToutes');
    }

    // Filtre pour afficher les spectacles qui sont encore en brouillon pour les utilisteurs connectés avec les droits spécifiques :

    public function scopeFrontendForAdmins($query)
    {
        return $query->where(function($query) {
            $query->whereHas('statut', function ($query) {
                        $query->where('is_frontend', '1')->orWhere('is_brouillon', 1);
            })->orWhere('statut_id', null);
        });
    }

    // Filtre affiches les spectacles en frontend :
    public function scopeFrontend($query)
    {
        return $query->where(function($query) {
            $query->whereHas('statut', function ($query) {
                        $query->where('is_frontend', '1');
            })->orWhere('statut_id', null);
        });
    }


    public function scopeAvecSouvenirs($query)
    {

        return $query->has('souvenirs');
    }

    // Pour l'API du Culturoscope, filtre uniquement les spectacles avec affiches
    public function scopeAvecAffiche($query)
    {
        return $query->has('affiche');
    }



    public function scopeIsStatutSpectacleCulturoscope($query)
    {
        return $query->
            whereHas('statut', function ($query) {
                $query->where('is_event_cltp', 1);
            });
    }


    // Filtre uniquement les spectacles avec représentations futures et dont le statut des représentations est publié pour le Culturoscope:

    public function scopeAvecRepresentationsCulturoscope($query)
    {
        return $query->
            with(['representations' => function ($query) {
                        $query->isProchainement()->isStatutRepresentationCulturoscope();
            }])->
            whereHas('representations', function ($query) {
                $query->isProchainement()->isStatutRepresentationCulturoscope();
            });
    }


    public function getPeriodeSpectacleAttribute()
    {
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

    public function getFirstRepresentationAttribute()
    {
        return $this->representations()->min('debut');
        // return $this->representations->last()->debut;
    }


    public function getLastRepresentationAttribute()
    {
        return $this->representations()->max('debut');
    }


    public function getFirstRepresentationActiveAttribute()
    {
        $representation = Representation::isActive()->where('spectacle_id', $this->id)->min('debut');
        return $representation;
        // return $this->representations()->min('debut');
    }


    public function getIsArchivedAttribute()
    {
        if ($this->last_representation < now()) {
            return true;
        }
        return false;
    }

    // Renvoie l'URL complète pour accéder à une page de spectacle par le slug
    public function getFullUrlAttribute()
    {

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


    public function getNbreRepresentationsAttribute()
    {
        return $this->representations->count();
    }



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


    public function getImagePixelsAttribute()
    {

        if ($this->affiche) {
            $file = $this->affiche->path;

            list($width, $height, $type, $attr) = getimagesize($file);
            return $width;
        }
    }

    // Usage depuis TWIG : {{ spectacle.getSocial(artiste.designation)}}
    // Renvoie le logo des réseaux sociaux du champ repeater de l'artiste

    public function getSocial($value)
    {
        $social = Social::find($value);

        if ($social) {
            return $social->icon ;
        }
    }


    // Inscrit le backend user connecté dans le champ programmateur
    public function getAdministrateurActuelAttribute()
    {
        if (BackendAuth::check()) {
            return BackendAuth::getUser()->id;
        }
    }


    public function getCltpFlagsOptions()
    {
        $api_key = env('API_KEY_CULTUROSCOPE');



        $url = 'https://www.culturoscope.ch/api/2.0/events_flags.php?api_key='.$api_key;
        
        $JSON = @file_get_contents($url);

        $data = json_decode($JSON, true);

        #dd($JSON);

        if (!is_array($data)) {
            // Pas de connexion au serveur du Cultursocope ou mauvaise clé ; on affiche alors des valeurs par défaut.
            return array(
                'CREATION' => 'Artistes régionaux',
                'YOUNGPUBLIC' => 'Jeune public',
                );
        } else {
            $data = json_decode($JSON, true);

            $flags = [];

            foreach ($data as $item) {
                $flags[$item['event_flag_code']] = $item['event_flag_title'];
            }

            return $flags;
        }
    }


    // Permet de cacher le champ des tags pour le Culturoscope s'il n'y a pas de clé API_KEY_CULTUROSCOPE définie dans .ENV
    public function filterFields($fields, $context = null)
    {

        return;

        if (!env('API_KEY_CULTUROSCOPE')) {
            $fields->cltp_flags->hidden = true;
        }
    }
}
