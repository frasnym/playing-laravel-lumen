<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_admin', function (Blueprint $table) {
            $table->increments("id_user_admin"); //? Auto Add PK
            $table->string("id_role_master", 2);
            $table->string("full_name_adm", 100);
            $table->string("password_adm");
            $table->char("status_adm", 1);
            $table->string("mobile_phone_adm", 50)->unique();
            $table->string("email_adm", 150)->unique();
            $table->timestamps();

            $table->foreign("id_role_master")->references("id_role_master")->on("role_master");
        });
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
