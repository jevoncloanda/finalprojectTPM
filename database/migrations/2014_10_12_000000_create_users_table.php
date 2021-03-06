<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('group_name')->unique();
            $table->string('password');
            $table->string('status');
            $table->string('leader_name');
            $table->string('leader_birth_place');
            $table->date('leader_birth_date');
            $table->string('leader_email')->unique();
            $table->string('leader_wa_number')->unique();
            $table->string('leader_line_id')->unique();
            $table->string('leader_github');
            $table->string('leader_gender');
            $table->string('leader_CV');
            $table->string('leader_card');
            $table->string('payment')->nullable();
            $table->string('verification_status')->nullable();
            $table->timestamp('email_verified_at')->nullable();
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
