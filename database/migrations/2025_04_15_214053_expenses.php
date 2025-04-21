<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users','id')->onDelete('cascade');
            $table->decimal('price',10,2);
            $table->string('description')->nullable();
            $table->enum('type',['fixed','variable']);
            $table->enum('category',['food','utility','fun','other']);
            $table->enum('frequency',['daily','weekly','monthly','annualy'])->nullable();
            $table->date('due_date')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        //
    }
};
