<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->default('John Doe');
            $table->string('company')->default('Default Company');
            $table->string('area')->default('Default Area');
            $table->string('email')->default('default@example.com');
            $table->string('department')->default('Default Department');
            $table->string('position')->default('Default Position');
            $table->string('photo')->nullable();
            $table->date('hiring_date')->default(date('Y-m-d'));
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('employees');
    }
}
