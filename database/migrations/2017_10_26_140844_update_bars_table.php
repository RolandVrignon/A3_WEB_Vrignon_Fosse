<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bars', function (Blueprint $table) {
            $table->boolean('flechettes')->default(false);
            $table->boolean('billard')->default(false);
            $table->boolean('flipper')->default(false);
            $table->boolean('baby_foot')->default(false);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bars', function (Blueprint $table) {
            $table->dropColumn(['flechettes',
                'billard',
                'flipper',
                'baby_foot',
            ]);
        });
    }
}
