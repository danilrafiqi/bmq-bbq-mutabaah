<?php

use Illuminate\Database\Seeder;

class ProdiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	\App\Prodi::insert([

			[
				'id'  			=> '7530',
				'nama_prodi' 	=> 'Manajemen Informatika',
				'tahun_berdiri'	=> '2000',
				'akreditasi'	=> 'A',
				'created_at'	=> \Carbon\Carbon::now('Asia/Jakarta'),
				'updated_at'	=> \Carbon\Carbon::now('Asia/Jakarta'),
			],
			[
				'id'  			=> '7510',
				'nama_prodi' 	=> 'Agribisnis',
				'tahun_berdiri'	=> '2000',
				'akreditasi'	=> 'B',
				'created_at'	=> \Carbon\Carbon::now('Asia/Jakarta'),
				'updated_at'	=> \Carbon\Carbon::now('Asia/Jakarta'),
			],
			[
				'id'  			=> '7520',
				'nama_prodi' 	=> 'Akuntansi',
				'tahun_berdiri'	=> '2000',
				'akreditasi'	=> 'B',
				'created_at'	=> \Carbon\Carbon::now('Asia/Jakarta'),
				'updated_at'	=> \Carbon\Carbon::now('Asia/Jakarta'),
			]
    	]);
    }
}
