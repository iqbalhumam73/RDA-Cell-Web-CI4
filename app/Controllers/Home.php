<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	public function etalase()
	{
		return view('etalase');
	}
	public function transaksi()
	{
		return view('transaksi');
	}
	public function akunsaya()
	{
		return view('akunsaya');
	}
	public function pesanan()
	{
		return view('pesanan');
	}
	public function tambahproduk()
	{
		return view('tambahproduk');
	}
}
