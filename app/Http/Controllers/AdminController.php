<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use App\Project;
use App\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

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
        return view('admin.projets', array(
            'projects' => $projects
        ));
    }

    public function ajax_getGithubProjects(){
        $response = \Httpful\Request::get("https://api.github.com/users/dimsand/repos?sort=updated")
            ->addHeader('Accept', 'application/vnd.github.mercy-preview+json')
            ->send();
        $projects_github = array();
        $projects_github['code'] = $response->code;
        if($response->code == Response::HTTP_OK){
            foreach ($response->body as $key => $r){
                $projects_github[$key]['name'] = $r->name;
                $projects_github[$key]['description'] = $r->description;
                $projects_github[$key]['language'] = $r->language;
                $projects_github[$key]['url'] = $r->html_url;
                $projects_github[$key]['created'] = $r->created_at;
                $projects_github[$key]['updated'] = $r->updated_at;
                $response_contributors = \Httpful\Request::get($r->contributors_url)->send();
                foreach ($response_contributors->body as $key2 => $rc){
                    if(!empty($rc->login) && !empty($rc->avatar_url)){
                        $projects_github[$key]['contributors'][$key2]['login'] = $rc->login;
                        $projects_github[$key]['contributors'][$key2]['avatar_url'] = $rc->avatar_url;
                    }
                }
            }
        }else{
            if(!empty($response->body->message)){
                $projects_github['message'] = $response->body->message;
            }
        }
        return view('admin.elements.github_projects', array(
            'projects_github' => $projects_github
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

    public function editProject($id)
    {
        $project = Project::find($id)->load('categories');
        $list_companies = Company::orderBy('name', 'asc')->pluck('nom', 'id');
        $list_categories = Category::orderBy('name', 'asc')->pluck('libelle', 'id');
        return view('admin.elements.edit_project', array(
            'project' => $project,
            'list_companies' => $list_companies,
            'list_categories' => $list_categories
        ));
    }

    public function editProjetForm($id, Request $request)
    {
        // TODO : faire la validation avec les messages d'erreur dans les views
        /*$validator = Validator::make($request->all(), [
            'name'       => 'required',
            'email'      => 'required|email',
            'nerd_level' => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return redirect('admin/editProjet/' . $id)->withErrors($validator)->withInput();
        }*/

        $project = Project::find($id);
        $project->title         = $request->get('title');
        $project->description   = $request->get('description');
        $project->company_id    = $request->get('company_id');
        $project->save();

        ProjectCategory::where('project_id', $id)->delete();    // on supprime les liaisons categories - projets avant de les réenregistrer
        if(!empty($request->categories)){
            foreach ($request->categories as $category_id){
                $project_categories = new ProjectCategory;
                $project_categories->project_id = $id;
                $project_categories->category_id = $category_id;
                $project_categories->save();
            }
        }

        return redirect('/admin/projets')->with('success', 'Le projet a bien été mis à jour.');
    }

    public function deleteProject($id){
        $project = Project::find($id);
        $project->delete();
        return redirect('/admin/projets')->with('success', 'Le projet a bien été supprimé.');
    }

    public function media(){
        return view('admin.media');
    }
}
