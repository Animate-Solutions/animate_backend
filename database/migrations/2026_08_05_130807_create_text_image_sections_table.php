<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextImageSectionsTable extends Migration
{
    public function up(): void
{
    Schema::create('text_image_sections', function (Blueprint $table) {
        $table->id();

        $table->string('header');
        $table->string('slug')->unique();

        $table->longText('text');

        $table->string('image')->nullable();

        $table->enum('image_position', ['left', 'right'])->default('right');

        $table->integer('sort_order')->default(0);

        $table->boolean('is_active')->default(true);

        $table->timestamps();
    });
}
}