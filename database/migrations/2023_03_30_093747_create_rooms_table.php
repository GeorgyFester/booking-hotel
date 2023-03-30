<?php

use App\Models\Hotel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('room_number');
            $table->text('description');

            $table->unsignedInteger('number_of_beds')
                ->default(1);

            $table->boolean('is_booked')
                ->default(false);

            $table->timestamp('starts_at')
                ->useCurrent();

            $table->timestamp('ends_at')
                ->useCurrent();

            $table->foreignIdFor(Hotel::class)
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
