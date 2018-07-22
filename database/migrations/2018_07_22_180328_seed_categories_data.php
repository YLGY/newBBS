<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $categories = [
            [
                'name' => 'Share',
                'description' => 'Share news & ideas',
            ],
            [
                'name' => 'Tutorial',
                'description' => 'Everything about development',
            ],
            [
                'name' => 'Q&A',
                'description' => 'Help each others',
            ],
            [
                'name' => 'Notifications',
                'description' => 'Website notifications',
            ],
        ];

        DB::table('categories')->insert($categories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('categories')->truncate();
    }
}
