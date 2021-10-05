<?php

namespace Database\Seeders;

use App\Models\FamousPeople;
use Illuminate\Database\Seeder;

class FamousPeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FamousPeople::create([
            'name'=>'Huỳnh bá Vinh',
            'bio'=> 'Hello, tôi là Vinh',
            'avt'=>'laptrinhkho.jpg',
            'pathYtb'=> 'https://www.youtube.com/channel/UClbmjhRAaNu4FHuCOTsnbLg',
            'job'=>'Software Engineer'
        ]);
        FamousPeople::create([
            'name'=>'Lê Gia Huy',
            'bio'=> 'Hello, tôi là Huy',
            'avt'=>'laptrinhkho.jpg',
            'pathYtb'=> 'https://www.youtube.com/c/L%C3%AAGiaHuy',
            'job'=>'Marketing'
        ]);
        
    }
}
