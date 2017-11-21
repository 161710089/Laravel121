<?php

use Illuminate\Database\Seeder;

class postsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
     {
        $posts = [
[
	'nama' =>'alfi', 
'tanggal_lahir'=>'2001-12-26', 
'Jk'=>'laki-laki',
'agama'=>'islam',
'umur'=>'16 ',
'alamat'=>'leuwidulang'
],


[
	'nama' =>'aldi', 
'tanggal_lahir'=>'2002-12-25',
' Jk'=>'laki-laki',
'agama'=>'islam',
'umur'=>'15 ',
'alamat'=>'baleendah'
],


[
	'nama' =>'alma', 
'tanggal_lahir'=>'2003-12-24', 
'Jk'=>'prempuan',
'agama'=>'islam',
'umur'=>'14 ',
'alamat'=>'boma'
],    


[
	'nama' =>'alka', 
'tanggal_lahir'=>'2004-12-23', 
'Jk'=>'laki-laki',
'agama'=>'islam',
'umur'=>'13 ',
'alamat'=>'bojong koneng'
],


[
	'nama' =>'algi', 
	'tanggal_lahir'=>
'2005-12-22', 
'Jk'=>'laki-laki',
 'agama'=>'islam','umur'=>'12 ',
 'alamat'=>'banjaran'
],


[
	'nama' =>'alif', 
'tanggal_lahir'=>'2006-12-21', 
'Jk'=>'laki-laki',
'agama'=>'islam',
'umur'=>'11 ',
'alamat'=>'ciparay'
],   


[
	'nama' =>'alia', 
'tanggal_lahir'=>'2007-12-20', 
'Jk'=>'perempuan',
'agama'=>'islam',
'umur'=>'10 ',
'alamat'=>'majalaya'
],


[
	'nama' =>'alma', 
'tanggal_lahir'=>'2008-12-19', 
'Jk'=>'perempuan',
'agama'=>'islam',
'umur'=>'09 ',
'alamat'=>'lengkong'
],


[
	'nama' =>'albi',
 'tanggal_lahir'=>'2009-12-18', 
 'Jk'=>'laki-laki',
 'agama'=>'islam',
 'umur'=>'08 ',
 'alamat'=>'cipatahunan'
],


[
	'nama' =>'al marhum', 
'tanggal_lahir'=>'2017-11-20', 
'Jk'=>'laki-laki',
'agama'=>'islam',
'umur'=>'00 ',
'alamat'=>'tpu'


],
];
//masukan data ke database    
DB::table('siswa')->insert($posts);
         }
}
