<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndianBloodDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indian_blood_donors', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('logo');
            $table->string('industry');
            $table->string('phone');
            $table->string('email');
            $table->string('date_of_data_breach');
            $table->string('number_of_leaked_accounts');
            $table->string('website');
            $table->string('detail');
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
        Schema::dropIfExists('indian_blood_donors');
    }
}
