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
        // Schema::create('tasklists', function (Blueprint $table) {
        //     $table->id(); //識別するid
        //     $table->unsignedBigInteger('user_id'); //Tasklistsを投稿したユーザのID
        //     $table->string('content'); //投稿内容
        //     $table->timestamps(); //投稿日時と更新日時
            
        //     //外部キー制約:保存されるテーブルの整合性を担保する
        //     $table->foreign('user_id')->references('id')->on('users');
        // });
        
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('content');    // contentカラム
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
        //Schema::dropIfExists('tasklists');
        Schema::dropIfExists('tasks');
    }
};
