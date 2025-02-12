<?php

use App\Models\EducationalLevel;
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
        Schema::create('educational_levels', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

        $educationalLevels = [
            ['title' => 'دوره اول ابتدایی'],
            ['title' => 'دوره دوم ابتدایی'],
            ['title' => 'متوسطه اول'],
            ['title' => 'متوسطه دوم نظری'],
            ['title' => 'فنی و حرفه ای'],
            ['title' => 'کاردانش'],
        ];

        foreach ($educationalLevels as $level) {
            EducationalLevel::create($level);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educational_levels');
    }
};
