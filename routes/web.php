<?php
// basic rouiting
Route::get('/', function () {
    return view('welcome');
});
//basic parameters
Route::get('/lc', function () {
    return '<h1>Selamat Datang</h1><br>'
    	   .'di webapp saya<br>'
    	   .'laravel emang keren';
});

 Route::get('user/{nama}',function($a){
 return 'nama saya adalah '.$a.' '   ;        

});

Route::get('kantin/<b>{makanan}<b>/{minuman}/{ngemil}<b>',function ($a,$b,$c){
return    ' <b>'.$a.'<b> <br>'
         .' <b>'.$b.'<b> <br> '
         .' <b>'.$c.'<b> <br>';
});        

 Route::get('user/{nama?}',function($b="Dadang conelo"){
 return $b;        

});

 Route::get('/testmodelsiswa',function(){

 	$a =App\PostModel::all();
 	return $a;
 });

Route::get('/testmodelsiswa2',function(){

 	$a =App\PostModel::find(1);
 	return $a;
 });

Route::get('/testmodelsiswa3',function(){

 	$as =App\PostModel::where('umur','like','16')->get();
 	return $as;
 });

Route::get('/testmodelsiswa4',function(){

 	$asd =App\PostModel::where('nama','like','al marhum')->get();
 	return $asd;
 });



