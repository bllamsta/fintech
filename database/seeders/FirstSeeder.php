<?php

namespace Database\Seeders;

use App\Models\balance;
use App\Models\Item;
use App\Models\Role;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\Hash;

class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(["name" => "Administrator"]);
        $bank_mini = Role::create(["name" => "Bank Mini"]);
        $canteen = Role::create(["name" => "canteen"]);
        $customer = Role::create(["name" => "customer"]);

        User::create([
            "name" => "Bella",
            "email" => "bella@gmail.com",
            "password" => Hash::make("bella"),
            "role_id" => $admin->id,
        ]);

        User::create([
            "name" => "Ira",
            "email" => "ira@gmail.com",
            "password" => Hash::make("ira"),
            "role_id" => $bank_mini->id,
        ]);

        User::create([
            "name" => "fadiah",
            "email" => "fadiah@gmail.com",
            "password" => Hash::make("fadiah"),
            "role_id" => $canteen->id,
        ]);

        $keren = User::create([
            "name" => "keren",
            "email" => "keren@gmail.com",
            "password" => Hash::make("keren"),
            "role_id" => $customer->id,
        ]);

        $mie_ayam = Item::create([
            "name" => "Mie Ayam",
            "price" => "15000",
            "stock" => "25",
            "description" => "mie dengan ayam kecap",
            "image" => "mieayam.jpg"
        ]);

        $bubur = Item::create([
            "name" => "Bubur",
            "price" => "7000",
            "stock" => "15",
            "description" => "bubur dengan toping ayam, cakwe, tongcai",
            "image" => "bubur.jpg"
        ]);

        $soto_ayam = Item::create([
            "name" => "Soto Ayam",
            "price" => "5000",
            "stock" => "25",
            "description" => "soto ayam dengan ayam",
            "image" => "sotoayam.jpg"
        ]);

        $aqua = Item::create([
            "name" => "Aqua",
            "price" => "5000",
            "stock" => "20",
            "description" => "air minum merek aqua",
            "image" => "aqua.jpg"
        ]);

        $teh_kotak = Item::create([
            "name" => "Teh Kotak",
            "price" => "5000",
            "stock" => "15",
            "description" => "Teh dalam bentuk kemasan kotak",
            "image" => "tehkotak.jpg"
        ]);

        balance::create([
            "user_id" => $keren->id,
            "balance" => 40000
        ]);

        Transaction::create([
            "user_id" => $keren->id,
            "item_id" => null,
            "quantity" => 10000,
            "invoice_id" => "SAL_001",
            "type" => 1,
            "status" => 3
        ]);

        Transaction::create([
            "user_id" => $keren->id,
            "item_id" => $mie_ayam->id,
            "quantity" => 1,
            "invoice_id" => "INV_001",
            "type" => 2,
            "status" => 1
        ]);
    }
}