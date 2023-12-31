<?php

declare(strict_types=1);

use App\Enums\StatusEnum;
use App\Enums\UserTypeEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table): void {
            $table->id();
            $table->string('name');
            $table->string('username')->nullable();
            $table->string('firstname')->nullable();
            $table->string('email')->unique();
            $table->string('phone_number')->unique()->nullable();
            $table->boolean('status')->default(StatusEnum::ACTIVE->value);
            $table->timestamp('email_verified_at')->nullable();
            $table->foreignId('feature_image_id')->index()->nullable();
            $table->string('password');
            $table->enum('user_type', [
                UserTypeEnum::USER_STUDENT->value,
                UserTypeEnum::USER_SCHOOL_MANAGEMENT->value
            ])->default(UserTypeEnum::USER_STUDENT->value);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
