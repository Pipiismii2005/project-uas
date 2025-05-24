<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('password');
            $table->enum('role', ['admin', 'sales', 'customer']);
            $table->rememberToken();
            $table->timestamps();
            
        });

        Schema::create('motorcycles', function (Blueprint $table) {
            $table->id();
            $table->string('merk', 100);
            $table->string('tipe', 100);
            $table->year('tahun');
            $table->string('warna', 50);
            $table->decimal('harga', 12, 2);
            $table->integer('stok');
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });

        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('user')->onDelete('cascade');
            $table->string('ktp_number', 50);
            $table->string('pekerjaan', 100)->nullable();
            $table->decimal('penghasilan', 12, 2)->nullable();
            $table->timestamps();
        });

        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('user')->onDelete('cascade');
            $table->string('kode_sales', 20)->unique();
            $table->string('wilayah', 100);
            $table->timestamps();
        });

        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade');
            $table->foreignId('sales_id')->constrained('sales')->onDelete('cascade');
            $table->foreignId('motorcycle_id')->constrained('motorcycles')->onDelete('cascade');
            $table->integer('jumlah');
            $table->decimal('total_harga', 12, 2);
            $table->enum('status', ['pending', 'approved', 'cancelled'])->default('pending');
            $table->timestamps();
        });

        Schema::create('motorcycle_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('motorcycle_id')->constrained('motorcycles')->onDelete('cascade');
            $table->string('image_path', 255);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('motorcycle_images');
        Schema::dropIfExists('transactions');
        Schema::dropIfExists('sales');
        Schema::dropIfExists('customers');
        Schema::dropIfExists('motorcycles');
        Schema::dropIfExists('user');
    }
};
