<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table): void {
            $table->id();
            $table->string('full_name', 120);
            $table->string('email', 120)->index();
            $table->string('phone', 30)->nullable();
            $table->string('program', 120)->index();
            $table->text('statement');
            $table->enum('status', ['submitted', 'reviewing', 'approved', 'rejected'])->default('submitted')->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
