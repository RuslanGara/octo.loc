<?php namespace Garaevrv\Feedback\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGaraevrvFeedback9 extends Migration
{
    public function up()
    {
        Schema::table('garaevrv_feedback_', function($table)
        {
            $table->string('photo', 256)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('garaevrv_feedback_', function($table)
        {
            $table->text('photo')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
