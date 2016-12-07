<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                      // $this->call(UsersTableSeeder::class);
        // データのクリア

        DB::table('users')->truncate();
        DB::table('password_resets')->truncate();
        DB::table('products_master')->truncate();
        DB::table('orders_table')->truncate();
        DB::table('orders_details_table')->truncate();


        // データ挿入
       $now = Carbon::now();

               //データ集
               $pannacotta = [
                   "name" => "パンナコッタ",
                   "img" => "images/pizza_1.jpg",
                   "description" => "ハバネロがほんのり苦い、大人のピッツァ。",
                   "hot" => "★★★★☆",
                   "by" => "Panasonic",
                   "price" => 4400,
                   "created_at" => $now,
                   "updated_at" => $now
               ];
               $mrrobot = [
                   "name" => "Mr.Robot",
                   "img" => "images/pizza_2.jpg",
                   "description" => "旨を楽しむ、大人のひと時。",
                   "hot" => "★★★★☆",
                   "by" => "USA Networks",
                   "price" => 11000,
                   "created_at" => $now,
                   "updated_at" => $now
               ];
               $pater = [
                 "name" => "パーソンオブインタレスト",
                 "img" => "images/pizza_3.jpg",
                 "description" => "さあ、今。燃え上がろう",
                 "hot" => "★★★★☆",
                 "by" => "BAD ROBOT",
                 "price" => 9400,
                 "created_at" => $now,
                 "updated_at" => $now
               ];
               $secret = [
                 "name" => "ウシジマくん",
                 "img" => "images/pizza_4.jpg",
                 "description" => "Feel this Moment.",
                 "hot" => "★★★★☆",
                 "by" => "Universal Studio Japan",
                 "price" => 2800,
                 "created_at" => $now,
                 "updated_at" => $now
               ];
               $sprized = [
                 "name" => "究極の一品",
                 "img" => "images/pizza_5.jpg",
                 "description" => "このメニューは注文回数が5回以上の方だけに提供される、究極の一品。",
                 "hot" => "★★★★★",
                 "by" => "Satoshi.",
                 "price" => 108600,
                 "created_at" => $now,
                 "updated_at" => $now
               ];
               $aaa = [
                 "name" => "nua",
                 "img" => "images/pizza_5.jpg",
                 "description" => "このメニューは注文回数が5回以上の方だけに提供される、究極の一品。",
                 "hot" => "ss",
                 "by" => "Satoshi.",
                 "price" => 108600,
                 "created_at" => $now,
                 "updated_at" => $now
               ];

      DB::table('products_master')->insert([$pannacotta, $mrrobot,$pater,$secret,$sprized]);
      // DB::table('pizza')->insert([$pack]);

    }
}
