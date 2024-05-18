<?php

use App\Models\Driver;
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
        Schema::create('races', function (Blueprint $table) {
            $table->id();
            $table->string('starting_point') ; 
            $table->string('arrival_point') ; 
            $table->timestamp('starting_date_time') ; 
            $table->timestamp('arrival_date_time') ; 
            $table->enum('race_status', ['En attente','En cours', 'Terminée'])->default('En attente') ; 
            $table->timestamps();

            $table->foreignIdFor(Driver::class)->nullable()->constrained()->cascadeOnDelete() ; 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('races');
    }
};
