<?php namespace Garaevrv\Feedback\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGaraevrvFeedback2 extends Migration
{
    public function up()
    {
        Schema::create('garaevrv_feedback_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name');
            $table->string('phone');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->text('photo');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('garaevrv_feedback_');
    }
}
