<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone_number')->nullable(); 
            $table->enum('role', ['admin', 'user']); 
            $table->string('profile_image_path')->nullable();
            $table->string('alamat')->nullable(); 
            $table->string('kelas')->nullable();   
            $table->string('jurusan')->nullable();  
            $table->string('portfolio')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        \App\Models\User::create([
            'name' => 'ahmad rafi',
            'email' => 'rafia9005@gmail.com',
            'password' => Hash::make('ahmadrafi01'),
            'role' => 'admin' 
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}
