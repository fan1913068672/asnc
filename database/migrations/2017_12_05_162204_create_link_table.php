<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('asnc_link')) {
          Schema::create('asnc_link', function (Blueprint $table) {
              $table->increments('link_id');
              $table->string('link_name')->default('')->comment('链接名字');
              $table->integer('link_order')->default(0)->comment('链接序号');
              $table->string('link_url')->default('')->comment('链接地址');
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
        Schema::dropIfExists('link');
    }
}
