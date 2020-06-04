<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateRoleMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_master', function (Blueprint $table) {
            $table->string("id_role_master", 2);
            $table->string("name_rm", 50);
        });

        // Insert some stuff
        DB::table('role_master')->insert(
            array(
                'id_role_master' => '1',
                'name_rm' => "Root"
            ),
            array(
                'id_role_master' => '2',
                'name_rm' => "Accounting"
            ),
            array(
                'id_role_master' => '3',
                'name_rm' => "Customer Service"
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_master');
    }
}
