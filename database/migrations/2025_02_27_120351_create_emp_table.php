<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('emp', function (Blueprint $table) {
            $table->id();
            $table->string('emp_name');
            $table->string('phone',10);
            $table->text('address');
            $table->string('gender');
            $table->string('email');
            $table->string('state');
            $table->decimal('salary', 8, 2);
            $table->json('hobbies');
            $table->timestamps();

        });
    }
    public function down(): void
    {
        Schema::dropIfExists('emp');
    }
};
