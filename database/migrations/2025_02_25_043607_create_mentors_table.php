<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('mentors', function (Blueprint $table) {
            $table->id(); // idカラム
            $table->string('name'); // 氏名
            $table->string('tel'); // 電話番号
            $table->string('teaching_languages'); // 指導可能なプログラミング言語
            $table->integer('experience_years'); // 経験年数
            $table->text('introduction'); // 自己紹介
            $table->timestamps(); // createdとupdate
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mentors');
    }
    
};
