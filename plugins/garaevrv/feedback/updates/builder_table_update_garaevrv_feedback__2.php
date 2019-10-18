<?php namespace Garaevrv\Feedback\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGaraevrvFeedback2 extends Migration
{
    public function up()
    {
        Schema::table('garaevrv_feedback_', function($table)
        {
            $table->smallInteger('photo')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('garaevrv_feedback_', function($table)
        {
            $table->integer('photo')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
