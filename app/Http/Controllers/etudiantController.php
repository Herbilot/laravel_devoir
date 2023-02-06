<?php

namespace App\Http\Controllers;

use App\Models\etudiant;
use Illuminate\Http\Request;

class etudiantController extends Controller
{
    public function index(){
        $data = etudiant::get();
        $moyenneGenerale = 0;

        foreach($data as $moy){
            $moyenneGenerale = $moyenneGenerale + $moy->moyenne;
        }
        $moyenneGenerale =  $moyenneGenerale / count($data);
        return view('displays', compact('data','moyenneGenerale'));
    }

    public function add(){
        return view('add');
    }

    public function saveEtu(Request $request){
        $request->validate([
            'prenom' => 'required',
            'nom' => 'required',
            'matiere' => 'required',
            'note1' => 'required',
            'examen' => 'required',
            'semestre' => 'required',
        ]);

        $prenom = $request->prenom;
        $nom = $request->nom;
        $matiere = $request->matiere;
        $note1 = $request->note1;
        $examen = $request->examen;
        $semestre = $request->semestre;

        $etu = new etudiant();

        $etu->prenom = $prenom;
        $etu->nom = $nom;
        $etu->matiere = $matiere;
        $etu->note1 = $note1;
        $etu->examen = $examen;
        $etu->semestre = $semestre;
        $etu->moyenne = ($note1 + $examen) / 2;
        $etu->save();
        return redirect()->back()->with('success', 'Etudiant(e) ajouté(e) avec succes');
    }

    public function delete($id){
        $etudiant = etudiant::where('id', '=', $id);
        $etudiant->delete();
        return  redirect('displays');

    }
}
