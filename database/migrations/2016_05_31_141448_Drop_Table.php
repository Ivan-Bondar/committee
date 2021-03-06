<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::drop('ExecutiveCommitteeBasic');
        Schema::drop('Responsible');
        Schema::drop('AgentExecutiveCommitteeBasic');
        Schema::drop('AgentDepartment');
        Schema::drop('PostDepartment');
        Schema::drop('Department');
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
