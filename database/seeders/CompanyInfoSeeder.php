<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CompanyInfo;

class CompanyInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $store = new CompanyInfo();
        $store->name = "Nepal Online Betting Site";
        $store->email = "support@gmail.com";
        $store->address = "Butwal-5, Golpark";
        $store->phone_no = "9812345678";
        $store->mobile_no = "980000012";
        $store->support_no = "98000001234";
        $store->save();
    }
}
