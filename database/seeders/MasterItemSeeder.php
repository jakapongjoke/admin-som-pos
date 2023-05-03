<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $img = array("https://scontent.fbkk5-7.fna.fbcdn.net/v/t1.18169-9/15622340_1657336744567275_2887865884741317469_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHA5o19eimQNuHpFodoF_IijLqdqQ7lzbaMup2pDuXNtszF1p85IXvcIV4eUUU3XUW34vsZzzEAAYiXQtXuX9Un&_nc_ohc=zK0ggQS0ADgAX_WqezO&_nc_ht=scontent.fbkk5-7.fna&oh=00_AfAeuoKaObDr-f0akXSziGllDhutQ1iB6k-SUrbGezMVbg&oe=645B4AB6","https://scontent.fbkk5-7.fna.fbcdn.net/v/t1.18169-9/15622340_1657336744567275_2887865884741317469_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHA5o19eimQNuHpFodoF_IijLqdqQ7lzbaMup2pDuXNtszF1p85IXvcIV4eUUU3XUW34vsZzzEAAYiXQtXuX9Un&_nc_ohc=zK0ggQS0ADgAX_WqezO&_nc_ht=scontent.fbkk5-7.fna&oh=00_AfAeuoKaObDr-f0akXSziGllDhutQ1iB6k-SUrbGezMVbg&oe=645B4AB6","https://scontent.fbkk5-4.fna.fbcdn.net/v/t1.18169-9/15697571_1657325904568359_7202375416312634273_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=9267fe&_nc_eui2=AeHTE23CXUDm944Dxp1naTHriA5whr5kRguIDnCGvmRGCzT6RdD2f73YPHfmWaI40OuGBHC3fGBIUS0qNuLwA9hF&_nc_ohc=Q09Gh0ClzF0AX_QRLnY&_nc_ht=scontent.fbkk5-4.fna&oh=00_AfBqLMA1jIZ8Kh6ZAilphODj9eRA4gvxsymt6VOHoAQqPA&oe=645B31B7","https://scontent.fbkk5-7.fna.fbcdn.net/v/t31.18172-8/15591014_1657330647901218_3306121918311544391_o.jpg?_nc_cat=107&ccb=1-7&_nc_sid=9267fe&_nc_eui2=AeFv2_1578VIKScWBqFVuAUYBsg4hwN-FSYGyDiHA34VJmaZ8d6imsWvywpmvGikru_yZ61Om1L-Ksr0oB9ouMrk&_nc_ohc=71YH7jR-wb8AX9Td7jU&_nc_ht=scontent.fbkk5-7.fna&oh=00_AfD4_LZpj1JDdeqxtd_-mgx1HbrV23F5ov-Jxl7pHXBRww&oe=645B195D","https://scontent.fbkk5-6.fna.fbcdn.net/v/t1.18169-9/12642597_1531956183771999_5978184431729352831_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=9267fe&_nc_eui2=AeEUqJmuhDvlL0wCuyMkoVHnYur9CEefcyZi6v0IR59zJg_wytCdWR1hmnxv1OwoMughWbJd9PIbtUcUElVNKchq&_nc_ohc=k-9Qw6jChyMAX8dFxHg&_nc_ht=scontent.fbkk5-6.fna&oh=00_AfB9Bh4fi0Y4d0Eacw1RrE4-EvYrRgtvxjEk62ZIwG7VEg&oe=645B44F0");
        
        $master_code = ["RG","ER","BL","NK","PD","BG","Doll","PK","CK"];

        $master_name = ["Rings","Earring","Bracelet","Necklace","Pendant","Bangle","Doll","Packaging","Cleaning Kits"];

        for($i=0;$i<count($master_code);$i++){
            DB::table('ananta_master_code')->insert([
                'master_code' => $master_code[$i],
                'running_number' => $i+1,
                'parent_id' => 0,
                'master_name' =>   $master_name[$i],
                'master_type' =>  "master_item",
                'master_price' => 0,
                'master_status' => 'active',
                'master_image' => json_encode(array($img[rand(0,count($img)-1)])),
            ]);
        }
    }
}
