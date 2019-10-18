<?php namespace Garaevrv\Feedback\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGaraevrvFeedback extends Migration
{
    public function up()
    {
        Schema::create('garaevrv_feedback_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('telephone', 20)->nullable();
            $table->text('name')->nullable();
            $table->text('photo');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('garaevrv_feedback_');
    }
}
