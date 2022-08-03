<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('address');
            $table->date('date_of_birth');
            $table->date('join_date');
            $table->enum('gender', ['male', 'female']);
            $table->tinyInteger('status');
            $table->string('nin'); 
            $table->string('bank_name'); 
            $table->string('bank_account_number',255); 
            $table->string('salary')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('username',255);
            $table->string('password');
            $table->foreignIdFor(\App\Models\Role::class,'role_id')->default(2);
            $table->tinyInteger('created_by'); 
            $table->string('description')->nullable();; 
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
