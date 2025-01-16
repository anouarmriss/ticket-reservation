<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (Schema::hasTable('reservations')) {
            Schema::table('reservations', function (Blueprint $table) {
                // Add any missing columns
                if (!Schema::hasColumn('reservations', 'user_id')) {
                    $table->foreignId('user_id')->constrained()->onDelete('cascade');
                }
                if (!Schema::hasColumn('reservations', 'reservation_date')) {
                    $table->date('reservation_date');
                }
                if (!Schema::hasColumn('reservations', 'reservation_time')) {
                    $table->time('reservation_time');
                }
                if (!Schema::hasColumn('reservations', 'qr_code')) {
                    $table->string('qr_code')->unique();
                }
                if (!Schema::hasColumn('reservations', 'is_used')) {
                    $table->boolean('is_used')->default(false);
                }
            });
        } else {
            Schema::create('reservations', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained()->onDelete('cascade');
                $table->date('reservation_date');
                $table->time('reservation_time');
                $table->string('qr_code')->unique();
                $table->boolean('is_used')->default(false);
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        // If you need to rollback
    }
};