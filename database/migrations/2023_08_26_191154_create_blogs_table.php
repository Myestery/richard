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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("description");
            $table->string("image");
            $table->unsignedBigInteger("author_id");
            $table->longText("content"); // published, draft, pending
            $table->unsignedBigInteger("lga_id")->nullable();
            $table->string("status")->default("published"); // published, draft, pending
            $table->timestamps();

            $table->foreign("lga_id")->references("id")->on("lgas")->onDelete("cascade");
            $table->foreign("author_id")->references("id")->on("users")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};
