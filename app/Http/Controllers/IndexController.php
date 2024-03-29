<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\project;
use Illuminate\Support\Facades\Auth;
use DB;
use Carbon\Carbon;

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
		$idUser = Auth::id();
		$infoAboutUser = User::select(['name', 'surname', 'patronymic', 'email'])
			->WHERE('id', $idUser)
			->get()->all()[0];
		$projects = project::select(['id', 'ProjectName', 'Text', 'Rating', 'created_at', 'updated_at'])->WHERE('idUser', $idUser)->get();
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
		$project = DB::table('projects')
			->join('users', 'projects.idUser', '=', 'users.id')
			->select('name', 'surname', 'ProjectName', 'Text', 'Rating', 'projects.created_at', 'projects.updated_at')
			->WHERE('projects.id', $id)
			->get()->all();
		return view('oneproject')->with(['project'=>$project[0]]);
	}
	
	public function SaveProject(Request $request){
		$this->validate($request, [
		'Projectname' => 'required|max:64',   
		'Description' => 'required|max:65536',
		]);		
		$idUser = Auth::id();
		$data=$request->all();         
		$project=new project;
		$project->idUser=$idUser;
		$project->ProjectName=$request->input('Projectname');
		$project->Text=$request->input('Description');
		$project->Rating = 10;
		$project->save();  
		$idProject=$project->id;
		foreach ($request->file() as $file) {
			foreach ($file as $f) {
				$f->move(storage_path('/storage/projects/'.$idUser.'/'.$idProject.''), time().'_'.$f->getClientOriginalName());
			}
		}
		return redirect('/profile'); 
	}
	
	public function DeleteProject(project $project){
		$project->delete();
		return redirect('/profile');
	}
}









