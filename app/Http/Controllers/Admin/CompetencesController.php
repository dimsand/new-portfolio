<?php

namespace App\Http\Controllers\Admin;

use App\Techno;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\TechnoType;

class CompetencesController extends Controller
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
    public function index()
    {
        $competences = Techno::all()->load('technoType');
        return view('admin.competences.index', array(
            'competences' => $competences
        ));
    }

    
    /**
     * add
     *
     * @return void
     */
    public function add()
    {
        $listTechnoTypes = TechnoType::orderBy('libelle', 'asc')->pluck('libelle', 'id');
        return view('admin.competences.add', [
            'listTechnoTypes' => $listTechnoTypes
        ]);
    }

    /**
     * addCompetence
     *
     * @param Request $request
     * @return void
     */
    public function addCompetence(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'libelle'    => 'required',
            'note'       => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return redirect(route('admin_add_competence'))->withErrors($validator)->withInput();
        }

        $competence = new Techno();
        $competence->libelle = $request->get('libelle');
        $competence->note = $request->get('note');
        $competence->color = $request->get('color');
        $competence->techno_type_id = $request->get('techno_type_id');
        $competence->save();

        return redirect(route('admin_competences'))->with('success', 'La compétence a bien été créée.');
    }

    /**
     * edit
     *
     * @param mixed $id
     * @return void
     */
    public function edit($id)
    {
        $competence = Techno::find($id)->load('technoType');
        $listTechnoTypes = TechnoType::orderBy('libelle', 'asc')->pluck('libelle', 'id');
        return view('admin.competences.edit', array(
            'competence' => $competence,
            'listTechnoTypes' => $listTechnoTypes
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
            'libelle'    => 'required',
            'note'       => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return redirect(route('admin_edit_competence', ['id' => $id])->withErrors($validator)->withInput());
        }

        $competence = Techno::find($id);
        $competence->libelle = $request->get('libelle');
        $competence->note = $request->get('note');
        $competence->color = $request->get('color');
        $competence->techno_type_id = $request->get('techno_type_id');
        $competence->save();

        return redirect(route('admin_competences'))->with('success', 'La compétence a bien été mis à jour.');
    }

    /**
     * delete
     *
     * @param mixed $id
     * @return void
     */
    public function delete($id)
    {
        $competence = Techno::find($id);
        $competence->delete();
        return redirect(route('admin_competences'))->with('success', 'La compétence a bien été supprimé.');
    }
}
