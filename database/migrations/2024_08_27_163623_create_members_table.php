<?php

use App\Models\guardian;
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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('guardID');
            $table->unsignedTinyInteger('phone');
            $table->unsignedBigInteger('idCard');
            $table->string('district');
            $table->string('sector');
            $table->foreign('guardID')->references('id')->on("guardians");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
