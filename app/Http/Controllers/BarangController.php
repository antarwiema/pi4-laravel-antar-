<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Barang as Barang;
use View, Input, Validator, Redirect;

class BarangController extends Controller
{
    public function index()
	{
		$barangs = Barang::all();
		$barangs->toArray();
		return View::make('barang.index', compact('barangs'));
	}
	public function buat()
	{
		return View::make('barang.buat');
	}
	public function simpan()
	{
		$input = Input::all();
		Barang::create($input);
		return Redirect::route('barang.index');
	}
	public function edit($id)
	{
		$barang = Barang::find($id);
		if (is_null($barang))
		{
			return Redirect::route('barang.index');
		}
		return View::make('barang.edit', compact('barang'));
	}
	public function update($id)
	{
		$input = Input::all();
		$barang = Barang::find($id);
		$barang->update($input);
		return Redirect::route('barang.index', $id);
	}
	public function hapus($id)
	{
		Barang::find($id)->delete();
		return Redirect::route('barang.index');
	}
}
