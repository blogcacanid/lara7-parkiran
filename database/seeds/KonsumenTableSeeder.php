<?php

use Illuminate\Database\Seeder;

class KonsumenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('konsumen')->insert([
            [
                'nama_konsumen'    	=> 'Budi',
                'jenis_kendaraan'	=> 'Mobil',
                'no_polisi'			=> 'B 1208 UHY',
                'tgl_lahir'			=> '1990-12-18',
                'kelamin'			=> 'L',
                'no_hp'				=> '081299234',
                'created_at'    	=> date('Y-m-d H:i:s'),
                'updated_at'    	=> NULL,
            ],
            [
                'nama_konsumen'    	=> 'Putri',
                'jenis_kendaraan'	=> 'Motor',
                'no_polisi'			=> 'B 5403 RGS',
                'tgl_lahir'			=> '1998-02-04',
                'kelamin'			=> 'P',
                'no_hp'				=> '081299234',
                'created_at'    	=> date('Y-m-d H:i:s'),
                'updated_at'    	=> NULL,
            ],
        ]);
    }
}
