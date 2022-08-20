<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('book')->insert([
            [
                'id' => 1,
                'authorId' => 5,
                'title' => 'Đắc nhân tâm',
                'ISBN'=> 'B093045',
                'pub_year'=>2017,
                'available'=> 1,
            ],
            [
                'id' => 2,
                'authorId' => 3,
                'title' => 'Rich dad poor dad',
                'ISBN'=> 'B045576',
                'pub_year'=>2010,
                'available'=> 1,
            ],
            [
                'id' => 3,
                'authorId' => 2,
                'title' => 'Nhà giả kim',
                'ISBN'=> 'B093088',
                'pub_year'=>2013,
                'available'=> 1,
            ],
            [
                'id' => 4,
                'authorId' => 1,
                'title' => 'Đắc nhân tâm',
                'ISBN'=> 'B093045',
                'pub_year'=>2017,
                'available'=> 1,
            ],
            [
                'id' => 5,
                'authorId' => 7,
                'title' => 'Tội ác và hình phạt',
                'ISBN'=> 'B093009',
                'pub_year'=>2014,
                'available'=> 1,
            ],
            [
                'id' => 6,
                'authorId' => 7,
                'title' => 'Mỗi lần vấp ngã là một lần Trưởng Thành',
                'ISBN'=> 'B093009',
                'pub_year'=>2014,
                'available'=> 1,
            ],
            [
                'id' => 7,
                'authorId' => 7,
                'title' => 'Tuổi Trẻ Đáng Giá Bao Nhiêu?',
                'ISBN'=> 'B093009',
                'pub_year'=>2014,
                'available'=> 1,
            ],
            [
                'id' => 8,
                'authorId' => 7,
                'title' => 'Đời thay đổi khi chúng ta thay đổi',
                'ISBN'=> 'B093009',
                'pub_year'=>2014,
                'available'=> 1,
            ],
            [
                'id' => 9,
                'authorId' => 7,
                'title' => 'Dạy Con Làm Giàu',
                'ISBN'=> 'B093009',
                'pub_year'=>2014,
                'available'=> 1,
            ],
            [
                'id' => 10,
                'authorId' => 7,
                'title' => 'Những Tấm Lòng Cao Cả',
                'ISBN'=> 'B093009',
                'pub_year'=>2014,
                'available'=> 1,
            ],
        ]);
    }


}
