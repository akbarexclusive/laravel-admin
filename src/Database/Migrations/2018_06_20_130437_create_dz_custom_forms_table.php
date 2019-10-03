<?php

use Drivezy\LaravelAdmin\Database\Seeds\FormMethodSeeder;
use Drivezy\LaravelUtility\LaravelUtility;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDzCustomFormsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up () {
        Schema::create('dz_custom_forms', function (Blueprint $table) {
            $userTable = LaravelUtility::getUserTable();

            $table->bigIncrements('id');

            $table->string('name');
            $table->string('identifier')->nullable();

            $table->string('description')->nullable();

            $table->unsignedBigInteger('route_id')->nullable();
            $table->foreign('route_id')->references('id')->on('dz_routes');

            $table->string('end_point')->nullable();
            $table->unsignedBigInteger('method_id')->nullable();

            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();

            $table->foreign('method_id')->references('id')->on('dz_lookup_values');

            $table->foreign('created_by')->references('id')->on($userTable);
            $table->foreign('updated_by')->references('id')->on($userTable);

            $table->timestamps();
            $table->softDeletes();
        });

        ( new FormMethodSeeder() )->run();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down () {
        Schema::dropIfExists('dz_custom_forms');

        ( new FormMethodSeeder() )->drop();
    }
}
