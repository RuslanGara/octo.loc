<?php namespace Garaevrv\Feedback;

use System\Classes\PluginBase;
use Garaevrv\Feedback\Models\FeedBack;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }
    public function registerListColumnTypes() {
        return [

            'image' => [$this, 'evalImageListColumn'],
        ];
    }

    function evalImageListColumn($value, $column, $record) {
//          FeedBack::find(5);
         $feedbackphoto = FeedBack::find($value);

        // Look for the featured image address, otherwise use a default one
        if ($feedbackphoto->photo) {
//         var_dump($featuredImage = $feedbackphoto->photo->getPath());
         $featuredImage = $feedbackphoto->photo->getPath();
         $featuredImage = $feedbackphoto->photo->getThumb(
             isset($column->config['width']) ? $column->config['width'] : 200,
             isset($column->config['height']) ? $column->config['height'] : 300,
             ['mode' => 'auto']
         );
        }
        else {
            $featuredImage = 'http://placehold.it/220x300';
        }
        return "<img src=\"$featuredImage\" />";

//          return var_dump($record);

    }


}
