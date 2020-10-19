<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeptInstitutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dept_institutes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('faculty_id');
            $table->string('type');
            $table->string('name');
            $table->string('image');
            $table->string('chairman_name');
            $table->string('chairman_image');
            $table->text('chairman_message')->nullable();
            $table->text('details')->nullable();
            $table->string('sliders')->nullable();
            $table->string('video')->nullable();
            $table->string('siv_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dept_institutes');
    }
}
