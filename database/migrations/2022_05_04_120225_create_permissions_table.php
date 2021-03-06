<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('description');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('description');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('permission_user', function (Blueprint $table) {
            $table->unsignedBigInteger('permission_id')->nullable();
            $table->foreign('permission_id')->references('id')->on('emperor.permissions');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('emperor.users');
            $table->primary(['permission_id','user_id']);
        });

        Schema::create('role_user', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id')->nullable();
            $table->foreign('role_id')->references('id')->on('emperor.roles');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('emperor.users');
            $table->primary(['role_id','user_id']);
        });

        Schema::create('permission_role', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id')->nullable();
            $table->foreign('role_id')->references('id')->on('emperor.roles');
            $table->unsignedBigInteger('permission_id')->nullable();
            $table->foreign('permission_id')->references('id')->on('emperor.permissions');
            $table->primary(['role_id','permission_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permission_role');
        Schema::dropIfExists('role_user');
        Schema::dropIfExists('permission_user');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('permissions');
    }
};
