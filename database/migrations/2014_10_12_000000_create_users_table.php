<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->dateTime('dob')->nullable();
            $table->string('location')->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('job')->nullable();
            $table->text('about')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->tinyInteger('status')->default(\App\Models\User::STATUS_ACTIVE);
            $table->tinyInteger('role')->default(\App\Models\User::ROLE_USER);
            $table->string('cung_no_boc')->nullable();
            $table->string('cung_thien_di')->nullable();
            $table->string('cung_tat_ach')->nullable();
            $table->string('cung_tai_bach')->nullable();
            $table->string('cung_tu_tuc')->nullable();
            $table->string('cung_phu_the')->nullable();
            $table->string('cung_huynh_de')->nullable();
            $table->string('cung_menh')->nullable();
            $table->string('cung_phu_mau')->nullable();
            $table->string('cung_phuc_duc')->nullable();
            $table->string('cung_dien_trach')->nullable();
            $table->string('cung_quan_loc')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}