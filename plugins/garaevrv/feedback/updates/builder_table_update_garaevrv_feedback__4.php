<?php namespace Garaevrv\Feedback\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGaraevrvFeedback4 extends Migration
{
    public function up()
    {
        Schema::table('garaevrv_feedback_', function($table)
        {
            $table->string('photo')->change();
        });
    }
    
    public function down()
    {
        Schema::table('garaevrv_feedback_', function($table)
        {
            $table->string('photo', 10)->change();
        });
    }
}
