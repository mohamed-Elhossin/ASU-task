<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string("fullNameAr");
            $table->string("fullNameEn");
            $table->string("notionalId");
            $table->string("workStation");
            $table->string("email")->unique();
            $table->string("phone");
            $table->string("educationdegree");
            $table->string("mejor");
            $table->string("mejor2");
            $table->string("joinDate");
            $table->decimal("GPA");
            $table->string("reasarchNameAr");
            $table->string("reasarchNameEn");
            $table->string("superNameAr");
            $table->string("superNameEn");
            $table->string("superAssestNameEn");
            $table->string("orgnizationName");
            $table->integer("numberOfApprove");
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
        Schema::dropIfExists('tasks');
    }
}
