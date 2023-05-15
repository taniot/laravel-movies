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

        /*

        -- title
-- year
-- description
-- country
-- original title
-- duration
-- cast
-- production
-- director
-- genres
-- score
-- image

*/


        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('original_title');
            $table->string('title')->nullable();
            $table->text('description');
            $table->year('year');
            $table->string('country', 2);
            $table->unsignedSmallInteger('duration')->nullable();
            $table->text('cast');
            $table->string('production', 100);
            $table->string('director', 70);
            $table->text('genres');
            $table->float('score',3,1)->default(0); // 0 - 10, 8,5
            $table->string('image')->nullable();
            $table->boolean('is_deleted')->default(false);
            $table->boolean('adult_only')->default(false);
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
        Schema::dropIfExists('movies');
    }
};
