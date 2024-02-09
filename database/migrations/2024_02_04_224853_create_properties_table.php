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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('ad_title')->nullable();
            $table->text('ad_text')->nullable();
            $table->string('slug')->nullable();
            $table->string('featured_image')->nullable();
            $table->integer('rooms_for_rent')->default(1);
            $table->integer('rooms_in_property')->default(2);
            $table->enum('roomstatus', ['available', 'let'])->default('available');
            $table->decimal('roomprice', 10, 2)->nullable();
            $table->enum('roomper', ['pw', 'pcm'])->nullable()->comment('pw = per week, pcm = per calendar month');
            $table->enum('roomtype', ['single', 'double', 'twin', 'triple', 'other'])->nullable();
            $table->string('postcode');
            $table->enum('advertiser_role', ['liveInLandlord', 'liveOutLandlord', 'currentTenant', 'agent', 'formerFlatmate'])->nullable();
            $table->enum('advertiser_role_other', ['liveInLandlord', 'liveOutLandlord', 'currentTenant', 'agent', 'formerFlatmate'])->nullable();
            $table->string('youremail')->nullable();
            $table->enum('property_type', ['Flat', 'House', 'Property'])->nullable();
            $table->enum('property_type_more', ['Flat', 'House', 'Property'])->nullable(); 
            $table->integer('occupants')->default(0);
            $table->string('street_name')->nullable();
            $table->string('neighbourhood')->nullable();
            $table->bigInteger('neighbourhood_id')->unsigned()->nullable();
            $table->string('station')->nullable();
            $table->integer('no_of_mins')->nullable();
            $table->enum('no_of_mins_by', ['walk', 'car', 'bus', 'tram'])->nullable();
            $table->enum('living_room', ['shared', 'own', 'none'])->nullable();
            $table->enum('off_street_parking', ['Y', 'N'])->nullable()->comment('Y => Yes | N => No');
            $table->enum('garden', ['Y', 'N'])->nullable()->comment('Y => Yes | N => No');
            $table->enum('garage', ['Y', 'N'])->nullable()->comment('Y => Yes | N => No');
            $table->enum('balcony', ['Y', 'N'])->nullable()->comment('Y => Yes | N => No');
            $table->enum('disabled_access', ['Y', 'N'])->nullable()->default('N')->comment('Y => Yes | N => No');
            $table->enum('roomensuite', ['Y', 'N'])->default('N')->comment('Y => Yes | N => No');
            $table->enum('roomfurnishings', ['furnished', 'unfurnished', 'partFurnished'])->nullable();
            $table->decimal('roomsecurity_deposit', 10, 2)->nullable();
            $table->integer('day_avail')->nullable();
            $table->integer('month_avail')->nullable();
            $table->integer('year_avail')->nullable();
            $table->integer('min_term')->nullable();
            $table->integer('max_term')->nullable();
            $table->enum('smoking_current', ['Y', 'N'])->default('N');
            $table->enum('short_lets_considered', ['Y', 'N'])->default('Y');
            $table->enum('days_of_wk_available', ['7_days_a_week', 'mon_to_fri_only', 'weekends_only'])->nullable()->default('7_days_a_week')->comment('7_days_a_week => 7 days a week | mon_to_fri_only => Monday to Friday only | weekends_only => Weekends only');
            $table->enum('references_needed', ['Y', 'N'])->default('N');
            $table->enum('bills_inc', ['yes', 'no', 'some'])->nullable()->default('no');
            $table->enum('broadband', ['Y', 'N'])->nullable()->default('N');
            $table->enum('inagreement', ['Y', 'N'])->default('Y');
            $table->enum('gender', ['FFF', 'FFM', 'MMF', 'MMM'])->nullable()->comment('FFF => 3 Females | FFM => 2 Females, 1 Male | MMF => 2 Males, 1 Female | MMM => 3 Males');
            $table->enum('share_type', ['ND', 'S', 'P', 'O', 'M'])->nullable()->comment('ND => Not disclosed | S => Student | P => Professional | O => Other | M => Mixed');
            $table->string('campus')->nullable();
            $table->enum('pets', ['Y', 'N'])->default('N');
            $table->integer('min_age')->nullable();
            $table->integer('max_age')->nullable();
            $table->string('lang')->nullable();
            $table->string('nationality')->nullable();
            $table->json('interests')->nullable();
            $table->enum('smoking', ['Y', 'N'])->default('N')->comment('Y => No preference | N => No');
            $table->enum('couples', ['Y', 'N'])->default('N')->comment('Y => Yes | N => No');
            $table->enum('vegetarians', ['Y', 'N'])->default('N')->comment('Y => Yes | N => No');
            $table->enum('gender_req', ['N', 'M', 'F'])->nullable()->comment('N => No preference | M => Male | F => Female');
            $table->enum('share_type_req', ['N', 'S', 'P'])->nullable()->comment('N => No preference | S => Student | P => Professional');
            $table->enum('pets_req', ['N', 'Y'])->nullable()->comment('N => No | Y => Yes');
            $table->string('lang_req')->nullable();
            $table->integer('min_age_req')->nullable();
            $table->integer('max_age_req')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('neighbourhood_id')->references('id')->on('cities')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};