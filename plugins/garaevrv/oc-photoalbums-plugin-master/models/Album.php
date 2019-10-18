<?php namespace Graker\PhotoAlbums\Models;

use Model;
use System\Models\File;

/**
 * Album Model
 */
class Album extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'graker_photoalbums_albums';

    /**
     * @var array of validation rules
     */
    public $rules = [
      'title' => 'required',
      'slug' => ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i', 'unique:graker_photoalbums_albums'],
    ];

    /**
     * @var array Relations
     */
    public $hasMany = [
      'photos' => [
        'Graker\PhotoAlbums\Models\Photo',
        'order' => 'sort_order desc',
      ]
    ];
    public $belongsTo = [
      'user' => ['Backend\Models\User'],
      'front' => ['Graker\PhotoAlbums\Models\Photo'],
    ];


    /**
     *
     * This relation allows us to eager-load 1 latest photo per album
     *
     * @return mixed
     */
    public function latestPhoto() {
        return $this->hasOne('Graker\PhotoAlbums\Models\Photo')->latest();
    }


    /**
     *
     * This relation allows us to count photos
     *
     * @return mixed
     */
    public function photosCount() {
        return $this->hasOne('Graker\PhotoAlbums\Models\Photo')
          ->selectRaw('album_id, count(*) as aggregate')
          ->orderBy('album_id')
          ->groupBy('album_id');
    }


    /**
     *
     * Getter for photos count
     *
     * @return int
     */
    public function getPhotosCountAttribute() {
        // if relation is not loaded already, let's do it first
        if (!array_key_exists('photosCount', $this->relations)) {
            $this->load('photosCount');
        }
        $related = $this->getRelation('photosCount');

        return ($related) ? (int) $related->aggregate : 0;
    }


    /**
     *
     * Returns image file of photo set as album front or image in the latest photo of the album
     *
     * @return File
     */
    public function getImage() {
        if ($this->front) {
            return $this->front->image;
        }

        if ($this->latestPhoto) {
            return $this->latestPhoto->image;
        }

        return NULL;
    }


    /**
     *
     * Sets and returns url for this model using provided page name and controller
     * For now we expose just id and slug for URL parameters
     *
     * @param string $pageName
     * @param CMS\Classes\Controller $controller
     * @return string
     */
    public function setUrl($pageName, $controller) {
        $params = [
          'id' => $this->id,
          'slug' => $this->slug,
        ];

        return $this->url = $controller->pageUrl($pageName, $params);
    }

}
