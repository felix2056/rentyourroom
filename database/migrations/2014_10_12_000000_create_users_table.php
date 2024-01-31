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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('gender', ['M', 'F', 'O'])->nullable();
            $table->integer('dofb_day')->nullable();
            $table->integer('dofb_month')->nullable();
            $table->integer('dofb_year')->nullable();
            $table->boolean('lookingforashare')->nullable();
            $table->boolean('haveashare')->nullable();
            $table->boolean('makeashare')->nullable();
            $table->string('where_heard')->nullable();
            $table->enum('advertiser_role', ['liveInLandlord', 'liveOutLandlord', 'currentTenant', 'agent', 'formerFlatmate'])->nullable();
            $table->date('date_available')->nullable();
            $table->integer('min_term')->nullable();
            $table->integer('max_term')->nullable();
            $table->enum('occupation', ['professional', 'student', 'other'])->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
