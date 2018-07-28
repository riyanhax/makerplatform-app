<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\project;

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
}
