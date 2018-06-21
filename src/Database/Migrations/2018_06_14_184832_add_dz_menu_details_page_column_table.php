<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDzMenuDetailsPageColumnTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up () {
        Schema::table('dz_menu_details', function (Blueprint $table) {
            $table->unsignedInteger('page_id')->nullable();
            $table->string('order_definition')->nullable();

            $table->foreign('page_id')->references('id')->on('dz_page_definitions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down () {
        Schema::table('dz_menu_details', function (Blueprint $table) {
            $table->dropForeign('dz_menu_details_page_id_foreign');

            $table->dropColumn('page_id');
            $table->dropColumn('order_definition');
        });
    }
}
