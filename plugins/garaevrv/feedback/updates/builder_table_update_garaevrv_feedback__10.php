<?php namespace Garaevrv\Feedback\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGaraevrvFeedback10 extends Migration
{
    public function up()
    {
        Schema::table('garaevrv_feedback_', function($table)
        {
            $table->string('photo', 256)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('garaevrv_feedback_', function($table)
        {
            $table->string('photo', 256)->nullable(false)->change();
        });
    }
}
