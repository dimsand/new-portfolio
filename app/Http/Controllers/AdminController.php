<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use App\Project;
use App\ProjectCategory;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
    public function infos_site(){
        return view('admin.infos_site');
    }
    public function competences(){
        return view('admin.competences');
    }
    public function experience(){
        return view('admin.experience');
    }
    public function projets(){

        $projects = Project::all()->load('categories','company');

        $uri = "https://api.github.com/users/dimsand/repos?sort=updated";

        $response = \Httpful\Request::get($uri)->send();
        //dd($response);

        $projects_github = array();
        foreach ($response->body as $key => $r){
            $projects_github[$key]['name'] = $r->name;
            $projects_github[$key]['description'] = $r->description;
            $projects_github[$key]['language'] = $r->language;
            $projects_github[$key]['url'] = $r->html_url;
            $projects_github[$key]['created'] = $r->created_at;
            $projects_github[$key]['updated'] = $r->updated_at;
        }
        //dd($projets_github);

        return view('admin.projets', array(
            'projects_github' => $projects_github,
            'projects' => $projects
        ));
    }

    public function addProjetForm(){
        $list_companies = Company::orderBy('name', 'asc')->pluck('nom', 'id');
        $list_categories = Category::orderBy('name', 'asc')->pluck('libelle', 'id');
        return view('admin.add_projet', [
            'list_companies' => $list_companies,
            'list_categories' => $list_categories
        ]);
    }

    public function addProjet(Request $request){

        $project = new Project;
        $project->title = $request->title;
        $project->description = $request->description;
        $project->company_id = $request->company_id;
        $project->save();

        $project_id = $project->id;

        if(!empty($request->categories)){
            foreach ($request->categories as $category_id){
                $project_categories = new ProjectCategory;
                $project_categories->project_id = $project_id;
                $project_categories->category_id = $category_id;
                $project_categories->save();
            }
        }


        return redirect()->route('admin_projets');
    }

    public function media(){
        return view('admin.media');
    }
}
