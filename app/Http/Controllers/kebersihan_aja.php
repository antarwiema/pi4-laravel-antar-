<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class kebersihan_aja extends Controller
{
    public function index()
    {
    	$data = array('daftar' => array('Antar', 'Wiema'));
    	return view ('kebersihan.index', $data);
    }

    public function profile($nama)
    {
    	$alamat = '';
    	$lama_pengabdian = '';

    	if($nama == 'antar'){
    		$alamat = 'Jl. Ahmad Dahlan, Depok';
    		$lama_pengabdian = '3 Tahun';
    	}elseif ($nama == 'wiema') {
    		$alamat = 'Jl. Jatirasa, Karawang';
    		$lama_pengabdian = '2 Tahun';
    	}else{

    	}
    	$data = [
    		'nama' => $nama,
    		'alamat' => $alamat,
    		'lama_pengabdian' => $lama_pengabdian
    	];
    	return view ('kebersihan.profile' , $data);
    }
}
