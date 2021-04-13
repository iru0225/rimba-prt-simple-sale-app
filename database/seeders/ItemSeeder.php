<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ItemSeeder extends Seeder
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
                "name" => "Shimizu PC-165 BIT",
                "images" => "https://www.shimizu.co.id/wp-content/uploads/2019/04/PC-165-BIT-samping-1x1.png",
                "unit" => "pcs",
                "stok" => 58,
                "harga_satuan" => 1900000,
                "harga_grosir" => 1800000
            ],
            [
                "name" => "Shimizu PC-260 BIT",
                "images" => "https://www.shimizu.co.id/wp-content/uploads/2019/09/PC-260-BIT.jpg",
                "unit" => "pcs",
                "stok" => 58,
                "harga_satuan" => 2500000,
                "harga_grosir" => 2300000
            ],
            [
                "name" => "Quick A360",
                "images" => "https://quick.co.id/wp-content/uploads/2017/11/Fitur-A-360-9-1.jpg",
                "unit" => "pcs",
                "stok" => 58,
                "harga_satuan" => 89000000,
                "harga_grosir" => 87500000
            ],
            [
                "name" => "Yanmar EF393T",
                "images" => "https://www.yanmar.com/media/news/2020/02/21073710/img_index_012.jpg",
                "unit" => "pcs",
                "stok" => 58,
                "harga_satuan" => 190000000,
                "harga_grosir" => 175000000
            ]
        ];

        DB::table('items')->insert($data);
    }
}
