<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Noticia;
use DB;

class Noticias extends Controller
{
	public function addNotice(Request $request)
	{
		$data=$request->all();
		$file = $request->file('archivo');
		$nombre = $file->getClientOriginalName();
		$path = public_path().'/';
  		$file->move($path, $nombre);
		$Noticias=Noticia::create(
			[
				'titulo'=>$data["Titulo"],
				'autor'=>$data["Autor"],
				'texto'=>$data["Noticia"],
				'imagen'=>'/'.$nombre,
			]);
		$Notice=Noticia::orderBy('created_at', 'desc')->get();
		return view('indexNotice',['Notice'=> $Notice]);
	}

	public function listNotice()
	{
		$Notice=Noticia::orderBy('created_at', 'desc')->get();
		return view('listNotice',['Notice'=> $Notice]);
	}

	public function indexNotice()
	{

		$Notice=Noticia::orderBy('created_at', 'desc')->get();
		return view('indexNotice',['Notice'=> $Notice]);
	}

	public function update($id)
	{
		$Notice=Noticia::find($id);
		return view('updateNotice',['Notice'=> $Notice]);
	}
	public function updateNotice(Request $request)
	{
		$data=$request->all();
		$file = $request->file('archivo');
		$nombre = $file->getClientOriginalName();
		$path = public_path().'/';
  		$file->move($path, $nombre);
  		
		$Noticias=Noticia::find($data["id"])->update(
			[
				'titulo'=>$data["Titulo"],
				'autor'=>$data["Autor"],
				'texto'=>$data["Noticia"],
				'imagen'=>'/'.$nombre,
			]);

		$Notice=Noticia::orderBy('created_at', 'desc')->get();
		return view('indexNotice',['Notice'=> $Notice]);
	}

	public function showNotice($id)
	{
		$Notice=Noticia::find($id);
		return view('showNotice',['Notice'=> $Notice]);
	}

	public function destroy($id)
	{
		$Notice=Noticia::find($id);
		$Notice->delete();
		$Notice=Noticia::orderBy('created_at', 'desc')->get();
		return view('listNotice',['Notice'=> $Notice]);
	}
}
