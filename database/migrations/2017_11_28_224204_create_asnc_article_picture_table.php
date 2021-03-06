<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsncArticlePictureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void

     */
    public function up()
    {
        if (!Schema::hasTable('asnc_article_picture')) {
            Schema::create('asnc_article_picture', function (Blueprint $table) {
                $table->increments('p_id');
                $table->integer('a_id');
                $table->text('p_path');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asnc_article_picture');
    }
}
