<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();

            $table->string('fullname')->nullable();
            $table->string('personal_id', 100);
            $table->string('email', 100)->default(null);

            $table->string('phone', 20)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('gender', 20); //male and female and other
            $table->string('region', 30)->default(null);
            $table->string('city', 30)->default(null);
            $table->string('state_address', 30)->default(null);
            $table->string('quarter_address', 30)->default(null);
            $table->text('links')->default(null);
            $table->string('case')->nullable();
            $table->string('type_of_problem')->nullable();
            $table->text('description')->defalut(null);
            $table->string('whgcase')->nullable();
            $table->integer('user_id');
            $table->string('file_image')->nullable();
            $table->string('personal_image')->nullable();
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
        Schema::dropIfExists('data');
    }
};
