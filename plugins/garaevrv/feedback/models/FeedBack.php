<?php namespace Garaevrv\Feedback\Models;

use Model;

/**
 * Model
 */
class FeedBack extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = true;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'garaevrv_feedback_';


    public $attachOne = [
        'photo' => 'System\Models\File'
    ];



    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


}
