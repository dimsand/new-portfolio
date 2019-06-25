<?php

namespace App\Http\Controllers\Admin;

use App\Experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\ExperienceType;
use App\Company;

class ExperienceController extends Controller
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

    /**
     * index
     *
     * @return void
     */
    public function index(){
        $experiences = Experience::all()->load('experienceType', 'company');
        return view('admin.experience.index', array(
            'experiences' => $experiences
        ));
    }

    /**
     * add
     *
     * @return void
     */
    public function add(){
        $listExperienceTypes = ExperienceType::orderBy('libelle', 'asc')->pluck('libelle', 'id');
        $listCompanies = Company::orderBy('nom', 'asc')->pluck('nom', 'id');
        return view('admin.experience.add', [
            'listExperienceTypes' => $listExperienceTypes,
            'listCompanies' => $listCompanies
        ]);
    }

    /**
     * addExperience
     *
     * @param Request $request
     * @return void
     */
    public function addExperience(Request $request){

        $validator = Validator::make($request->all(), [
            'title'         => 'required',
            'description'   => 'required'
        ]);
        if ($validator->fails()) {
            return redirect(route('admin_add_experience'))->withErrors($validator)->withInput();
        }

        $experience = new Experience();
        $experience->title = $request->get('title');
        $experience->date_debut = $request->get('date_debut');
        $experience->date_fin = $request->get('date_fin');
        $experience->description = $request->get('description');
        $experience->experience_type_id = $request->get('experience_type_id');
        $experience->company_id = $request->get('company_id');
        $experience->save();

        return redirect()->route('admin_experience')->with('success', 'L\'expérience a bien été ajoutée.');
    }
    
    /**
     * edit
     *
     * @param mixed $id
     * @return void
     */
    public function edit($id)
    {
        $experience = Experience::find($id)->load('experienceType','company');
        $listExperienceTypes = ExperienceType::orderBy('libelle', 'asc')->pluck('libelle', 'id');
        $listCompanies = Company::orderBy('nom', 'asc')->pluck('nom', 'id');
        return view('admin.experience.edit', array(
            'experience' => $experience,
            'listExperienceTypes' => $listExperienceTypes,
            'listCompanies' => $listCompanies
        ));
    }

    /**
     * store
     *
     * @param mixed $id
     * @param Request $request
     * @return void
     */
    public function store($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'         => 'required',
            'description'   => 'required'
        ]);
        if ($validator->fails()) {
            return redirect(route('admin_edit_experience', ['id'=>$id])->withErrors($validator)->withInput());
        }

        $experience = Experience::find($id);
        $experience->title = $request->get('title');
        $experience->date_debut = $request->get('date_debut');
        $experience->date_fin = $request->get('date_fin');
        $experience->description = $request->get('description');
        $experience->experience_type_id = $request->get('experience_type_id');
        $experience->company_id = $request->get('company_id');
        $experience->save();

        return redirect(route('admin_experience'))->with('success', 'L\'expérience a bien été mis à jour.');
    }

    /**
     * delete
     *
     * @param mixed $id
     * @return void
     */
    public function delete($id){
        $experience = Experience::find($id);
        $experience->delete();
        return redirect(route('admin_experience'))->with('success', 'L\'expérience a bien été supprimée.');
    }

}
