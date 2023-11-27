<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title' => 'Introduction to Laravel', 'author' => 'John Doe'],
            ['title' => 'PHP Basics', 'author' => 'Jane Smith'],
            // Add more books if needed
        ];

        Book::insert($data);
    }
}
