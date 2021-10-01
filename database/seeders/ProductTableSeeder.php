<?php

namespace Database\Seeders;

use App\Models\MotoCycles;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MotoCycles::create([
            'name' => 'R1 2020',
            'price' => '35000$',
            'specifications'=> json_encode([
                        "Động cơ" => 1,
                        "Tỉ số nén" => 1, 
                        "Mô-men xoắn cực đại" => 1, 
                        "Đường kính xi lanh X pít tông" => 1213,
                        "Hệ thống cung cấp nhiên liệu" => 1213, 
                        "Hệ thống đánh lửa" => 1213, 
                        "Hệ thống truyền động" => 1213,
                        "Vành và lốp" => 1213,
                        "Hệ thống phanh trước" => 1213,
                        "Hệ thống phanh sau" => 1213,
                        "Dài x rộng x cao" => 1213,
                        "Chiều dài cơ sở" => 1213,
                        "Chiều cao yên" => 1213,
                        "Chiều cao gầm" => 1213,
                        "Trọng lượng ướt" => 1213,
                        "Dung tích bình xăng" => 1213,
                        "Dung tích dầu máy" => 1213,
            ]),
            'detail' => 'chi tiet xe',
            'options' =>json_encode([
                        "Tay thang" => 1213,
                        "Tay Con" => 1213, 
                        "Kinh chan gio" => 1213, 
                        "Phanh truoc" => 1213,
            ]),
            'path' =>json_encode([
                        "path1" => 1213,
                        "path2" => 1213, 
                        "path3" => 1213, 
                        "path4" => 1213,
            ]),
            'user_id' => 1,
        ]);
        MotoCycles::create([
            'name' => 'Ducati 2020',
            'price' => '45000$',
            'specifications'=> json_encode([
                        "Động cơ" => 1,
                        "Tỉ số nén" => 1, 
                        "Mô-men xoắn cực đại" => 1, 
                        "Đường kính xi lanh X pít tông" => 1213,
                        "Hệ thống cung cấp nhiên liệu" => 1213, 
                        "Hệ thống đánh lửa" => 1213, 
                        "Hệ thống truyền động" => 1213,
                        "Vành và lốp" => 1213,
                        "Hệ thống phanh trước" => 1213,
                        "Hệ thống phanh sau" => 1213,
                        "Dài x rộng x cao" => 1213,
                        "Chiều dài cơ sở" => 1213,
                        "Chiều cao yên" => 1213,
                        "Chiều cao gầm" => 1213,
                        "Trọng lượng ướt" => 1213,
                        "Dung tích bình xăng" => 1213,
                        "Dung tích dầu máy" => 1213,
            ]),
            'detail' => 'chi tiet xe',
            'options' =>json_encode([
                        "Tay thang" => 1213,
                        "Tay Con" => 1213, 
                        "Kinh chan gio" => 1213, 
                        "Phanh truoc" => 1213,
            ]),
            'path' =>json_encode([
                        "path1" => 1213,
                        "path2" => 1213, 
                        "path3" => 1213, 
                        "path4" => 1213,
            ]),
            'user_id' => 1,
        ]);
        MotoCycles::create([
            'name' => 'Kawasaki 2020',
            'price' => '35000$',
            'specifications'=> json_encode([
                        "Động cơ" => 1,
                        "Tỉ số nén" => 1, 
                        "Mô-men xoắn cực đại" => 1, 
                        "Đường kính xi lanh X pít tông" => 1213,
                        "Hệ thống cung cấp nhiên liệu" => 1213, 
                        "Hệ thống đánh lửa" => 1213, 
                        "Hệ thống truyền động" => 1213,
                        "Vành và lốp" => 1213,
                        "Hệ thống phanh trước" => 1213,
                        "Hệ thống phanh sau" => 1213,
                        "Dài x rộng x cao" => 1213,
                        "Chiều dài cơ sở" => 1213,
                        "Chiều cao yên" => 1213,
                        "Chiều cao gầm" => 1213,
                        "Trọng lượng ướt" => 1213,
                        "Dung tích bình xăng" => 1213,
                        "Dung tích dầu máy" => 1213,
            ]),
            'detail' => 'chi tiet xe',
            'options' =>json_encode([
                        "Tay thang" => 1213,
                        "Tay Con" => 1213, 
                        "Kinh chan gio" => 1213, 
                        "Phanh truoc" => 1213,
            ]),
            'path' =>json_encode([
                        "path1" => 1213,
                        "path2" => 1213, 
                        "path3" => 1213, 
                        "path4" => 1213,
            ]),
            'user_id' => 1,
        ]);
        MotoCycles::create([
            'name' => 'BMW-S1000RR 2020',
            'price' => '35000$',
            'specifications'=> json_encode([
                        "Động cơ" => 1,
                        "Tỉ số nén" => 1, 
                        "Mô-men xoắn cực đại" => 1, 
                        "Đường kính xi lanh X pít tông" => 1213,
                        "Hệ thống cung cấp nhiên liệu" => 1213, 
                        "Hệ thống đánh lửa" => 1213, 
                        "Hệ thống truyền động" => 1213,
                        "Vành và lốp" => 1213,
                        "Hệ thống phanh trước" => 1213,
                        "Hệ thống phanh sau" => 1213,
                        "Dài x rộng x cao" => 1213,
                        "Chiều dài cơ sở" => 1213,
                        "Chiều cao yên" => 1213,
                        "Chiều cao gầm" => 1213,
                        "Trọng lượng ướt" => 1213,
                        "Dung tích bình xăng" => 1213,
                        "Dung tích dầu máy" => 1213,
            ]),
            'detail' => 'chi tiet xe',
            'options' =>json_encode([
                        "Tay thang" => 1213,
                        "Tay Con" => 1213, 
                        "Kinh chan gio" => 1213, 
                        "Phanh truoc" => 1213,
            ]),
            'path' =>json_encode([
                        "path1" => 1213,
                        "path2" => 1213, 
                        "path3" => 1213, 
                        "path4" => 1213,
            ]),
            'user_id' => 1,
        ]);
    }
}
