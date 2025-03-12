<?php

use App\Models\{author as Author ,category As Category};
use App\Models\Publishing_company;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->integer('number_of_copies');
            $table->integer('year_of_publication');
            $table->text('image_path');
            $table->timestamps();

            $table->uuid('category_id')->index()->foreignIdFor(Category::class)->onDelete('cascade');
            $table->uuid('author_id')->index()->foreignIdFor(Author::class)->onDelete('cascade');
            $table->uuid('publishing_company_id')->index()->foreignIdFor(Publishing_company::class)->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('book_returns');
        Schema::dropIfExists('borrowed_books');
        Schema::dropIfExists('books');
    }
};
