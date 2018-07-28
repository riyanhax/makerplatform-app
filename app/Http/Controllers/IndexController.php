<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\project;

class IndexController extends Controller
{
    function PersonalPage(){
		$infoAboutUser = User::select(['name', 'surname', 'patronymic', 'email'])->WHERE('id', '8')->get();
		$projects = project::select(['ProjectName', 'DateAdd', 'dateUpdate'])->WHERE('idUser', '8')->get();		//ВЫВОДИТ ТРЕТЬЕГО
		return  view('personalpage')->with(['infoAboutUser'=> $infoAboutUser, 'projects'=>$projects]);
	}
}
