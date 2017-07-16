<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('image');
            $table->string('language');
            $table->integer('price');
            $table->integer('quantity');
            $table->text('detail');
            $table->integer('topic_id')->unsigned()->nullable();
      			$table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade');

            $table->integer('author_id')->unsigned()->nullable();
      			$table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');

            $table->integer('publish_id')->unsigned()->nullable();
      			$table->foreign('publish_id')->references('id')->on('publish_companies')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
        Schema::table('books', function (Blueprint $table) {
          $table->dropForeign('articels_topic_id_foreign');
          $table->dropColumn('topic_id');

          $table->dropForeign('articels_author_id_foreign');
          $table->dropColumn('author_id');

          $table->dropForeign('articels_publish_id_foreign');
          $table->dropColumn('publish_id');

        });
    }
}
