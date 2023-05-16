<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up()
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->date('sale_date')->nullable()->change();
        });
    }


    public function down()
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->date('sale_date');
        });
    }
};