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
        Schema::table('games', function (Blueprint $table) {
            $table->unsignedBigInteger("team_1_id");
            $table->foreign("team_1_id")->references("id")->on("teams");
            $table->unsignedBigInteger("team_2_id");
            $table->foreign("team_2_id")->references("id")->on("teams");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('games', function (Blueprint $table) {
            $table->dropForeign(["team_1_id"]);
            $table->dropForeign(["team_2_id"]);
        });
    }
};
