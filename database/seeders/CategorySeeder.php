<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\CategoryModel;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama_category' => 'Now Playing',
                'slug' => 'now_playing',
            ],
        [
            'nama_category' => 'Popular',
                'slug' => 'popular',
        ],[
            'nama_category' => 'Top Rated',
                'slug' => 'top_rated',
        ],[
            'nama_category' => 'Upcoming',
                'slug' => 'upcoming',
        ]

        ];
        
        CategoryModel::insert($data);
    }
}
