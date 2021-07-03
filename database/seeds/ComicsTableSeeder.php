<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = config('comics');

        foreach($datas as $data){
            $new_comic = new Comic();
            $new_comic['title']=$data['title'];
            $new_comic['description']=$data['description'];
            $new_comic['thumb']=$data['thumb'];
            $new_comic['price']=$data['price'];
            $new_comic['series']=$data['series'];
            $new_comic['sale_date']=$data['sale_date'];
            $new_comic['type']=$data['type'];
            
            $new_comic->save();
        }
        
    }
}
