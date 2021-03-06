<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'username' => 'admin',
            'phone_number' => '0999999999',
            'other_phone_number' => '0999999999',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password

        ]);
        DB::table('posts')->insert([
            'title' => 'title',
            'content' => 'content',
            'type' => 'type',
            'position' => 'title_page',
            'image' => 'image',
            'video' => 'video',
            'status' => 'status'
        ]);
        DB::table('posts')->insert([
            'title' => 'title',
            'content' => 'content',
            'type' => 'type',
            'position' => 'logo_page',
            'image' => 'image',
            'video' => 'video',
            'status' => 'status'
        ]);
        DB::table('posts')->insert([
            'title' => 'title',
            'type' => 'type',
            'content' => 'content',
            'position' => 'footer_page',
            'image' => 'image',
            'video' => 'video',
            'status' => 'status'
        ]);
        DB::table('posts')->insert([
            'title' => 'title',
            'type' => 'type',
            'content' => 'content',
            'position' => 'content_one',
            'image' => 'image',
            'video' => 'video',
            'status' => 'status'
        ]);
        DB::table('posts')->insert([
            'title' => 'title',
            'type' => 'type',
            'content' => 'content',
            'position' => 'content_two',
            'image' => 'image',
            'video' => 'video',
            'status' => 'status'
        ]);
        DB::table('posts')->insert([
            'title' => 'title',
            'type' => 'type',
            'content' => 'content',
            'position' => 'content_three',
            'image' => 'image',
            'video' => 'video',
            'status' => 'status'
        ]);
        DB::table('posts')->insert([
            'title' => 'title',
            'type' => 'type',
            'content' => 'content',
            'position' => 'content_four',
            'image' => 'image',
            'video' => 'video',
            'status' => 'status'
        ]);
        DB::table('posts')->insert([
            'title' => 'title',
            'type' => 'type',
            'content' => 'content',
            'position' => 'post_left',
            'image' => 'image',
            'video' => 'video',
            'status' => 'status'
        ]);
        DB::table('posts')->insert([
            'title' => 'title',
            'type' => 'type',
            'content' => 'content',
            'position' => 'post_center',
            'image' => 'image',
            'video' => 'video',
            'status' => 'status'
        ]);
        DB::table('posts')->insert([
            'title' => 'title',
            'type' => 'type',
            'content' => 'content',
            'position' => 'post_right',
            'image' => 'image',
            'video' => 'video',
            'status' => 'status'
        ]);
        DB::table('posts')->insert([
            'title' => 'title',
            'type' => 'type',
            'content' => 'content',
            'position' => 'post_right',
            'image' => 'image',
            'video' => 'video',
            'status' => 'status'
        ]);
        DB::table('posts')->insert([
            'title' => 'title',
            'type' => 'type',
            'content' => 'content',
            'position' => 'main_service',
            'image' => 'image',
            'video' => 'video',
            'status' => 'status'
        ]);
        DB::table('posts')->insert([
            'title' => 'title',
            'type' => 'type',
            'content' => 'content',
            'position' => 'moving_house',
            'image' => 'image',
            'video' => 'video',
            'status' => 'status'
        ]);
        DB::table('posts')->insert([
            'title' => 'title',
            'type' => 'type',
            'content' => 'content',
            'position' => 'contact',
            'image' => 'image',
            'video' => 'video',
            'status' => 'status'
        ]);
    }
}
