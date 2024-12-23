<?php

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
        Schema::table('total_fisheries_production', function (Blueprint $table) {
            $table->renameColumn('year_2020', 'total_fisheries_production_2020');
            $table->renameColumn('year_2021', 'total_fisheries_production_2021');
            $table->renameColumn('year_2022', 'total_fisheries_production_2022');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('total_fisheries_production', function (Blueprint $table) {
            $table->renameColumn('total_fisheries_production_2020', 'year_2020');
            $table->renameColumn('total_fisheries_production_2021', 'year_2021');
            $table->renameColumn('total_fisheries_production_2022', 'year_2022');
        });
    }
};