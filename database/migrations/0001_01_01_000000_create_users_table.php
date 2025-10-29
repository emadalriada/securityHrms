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
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('hr')->default(false);
            $table->string('nameEnglish')->nullable();
            $table->string('nameArabic')->nullable();
            $table->string('nationalId')->nullable();
            $table->string('company')->nullable();
            $table->string('workType')->nullable();
            $table->string('companyCode')->nullable();
            $table->string('location')->nullable();
            $table->string('telephone')->nullable();
            $table->string('telephone2')->nullable();
            $table->date('startDate')->nullable();
            $table->date('birthDate')->nullable();
            $table->string('jobTitle')->nullable();
            $table->string('education')->nullable();
            $table->string('area')->nullable();
            $table->string('vp')->nullable();
            $table->boolean('dataChecked')->default(false);
            $table->boolean('photoDone')->default(false);
            $table->boolean('idDone')->default(false);
            $table->boolean('allThingsDone')->default(false);
            $table->date('leaveDate')->nullable();
            $table->string('reasonOfLeaving')->nullable();
            $table->text('address')->nullable();
            $table->text('notes')->nullable();
            $table->boolean('out')->default(false);
            $table->string('personalPhoto')->nullable();
            $table->string('nationalIdFront')->nullable();
            $table->string('nationalIdBack')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
