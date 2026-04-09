<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
            Schema::table('kontrakans', function (Blueprint $table) {
        if (!Schema::hasColumn('kontrakans', 'peraturan_kontrakan')) {
            $table->text('peraturan_kontrakan')->nullable()->after('fasilitas_umum');
        }
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kontrakans', function (Blueprint $table) {
            $table->dropColumn('peraturan_kontrakan');
        });
    }
};
