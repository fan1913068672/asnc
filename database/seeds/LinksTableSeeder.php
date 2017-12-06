<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
          [
            'link_name'=> '百度',
            'link_order'=>1,
            'link_url'=>'https://www.baidu.com',
          ],
          [
            'link_name'=> '谷歌',
            'link_order'=>2,
            'link_url'=>'https://www.google.com',
          ],
        ];
        DB::table('asnc_link')->insert($data);
    }
}
