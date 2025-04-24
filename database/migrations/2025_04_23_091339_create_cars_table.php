<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->integer("year");
            $table->string("price");
            $table->string("vin");
            $table->string("mileage");
            $table->string("address");
            $table->string("phone",45);
            $table->longText("description")->nullable();
            $table->timestamp("published_at")->nullable();
            $table->timestamp("deleted_at")->nullable();
            $table->foreignId('maker_id')->constrained('makers');
            $table->foreignId('model_id')->constrained('models');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId("car_type_id")->constrained("car_types");
            $table->foreignId("fuel_type_id")->constrained("fuel_types");
            $table->foreignId("city_id")->constrained("cities");
            $table->string("color");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
