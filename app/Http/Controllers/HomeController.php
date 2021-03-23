<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Voiture;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller {

	public function index() {
		$voiture = Voiture::paginate(8);
		return view('index', compact('voiture'));
	}

	public function SearchVoiture(Request $request) {
		if ($request -> isMethod('post')) {
			$mot = $request['motcle'];
			$motcle = '%' . $mot . '%';
			//dd($motcle);
			if ($motcle == null) {
				$voiture = Voiture::paginate(8);
				//dd('aaaaaaaaaaaaaa');
			} else {
				$voiture = Voiture::where('title', 'like', $motcle)-> paginate(8);
				//dd($voiture);
			}
		} else {
			$voiture = Voiture::paginate(8);
		}
		return view('index', compact('voiture'));

	}

	public function contact(Request $request) {
		if ($request -> isMethod('post')) {
			$input = $request -> all();
			$cont = Contact::create($input);
			if ($cont) {
				return redirect('Contact') -> with('success', 'Votre message envoyé avec success');
			}
		}
		return view('pages.contact');
	}

	public function voitures() {
		return view('pages.voitures');
	}

}
