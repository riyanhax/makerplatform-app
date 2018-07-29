<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\project;
use Illuminate\Support\Facades\Auth;
use DB;

class IndexController extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function projects()
    {
        return view('projects');
    }

    public function contests()
    {
        return view('contests');
    }

    public function files()
    {
        return view('files');
    }

    public function profile()
    {
		$infoAboutUser = User::select(['name', 'surname', 'patronymic', 'email'])->WHERE('id', '8')->get();
		$projects = project::select(['ProjectName', 'DateAdd', 'dateUpdate'])->WHERE('idUser', '8')->get();		//ВЫВОДИТ ТРЕТЬЕГО
		return  view('profile')->with(['infoAboutUser'=> $infoAboutUser, 'projects'=>$projects]);
	}
	
	public function addProject()
	{
		$idUser = Auth::id();
		$infoUser = User::All()->where('id', $idUser)->first();
		return view('addProject')->with(['infoUser'=>$infoUser]);
	}
	
	public function Project($id)
	{
		$infoProject = DB::table('projects')
			->join('users', 'projects.idUser', '=', 'users.id')
			->select('name', 'surname', 'ProjectName', 'Text', 'Rating', 'DateAdd', 'dateUpdate')
			->WHERE('projects.id', $id)
			->get();
		return view('oneproject')->with(['infoProject'=>$infoProject]);
	}
}









