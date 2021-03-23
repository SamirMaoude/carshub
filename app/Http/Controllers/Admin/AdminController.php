<?php

namespace App\Http\Controllers\Admin;
use Auth;
use App\Models\User;
use App\Models\Voiture;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller {

	public function __construct() {
		$this -> middleware('auth');
		$this -> middleware('admin');
	}

	public function index() {
		$c = count(User::all());
		$client = $c - 1;
		$voiture = count(Voiture::all());
		$contact = count(Contact::all());
		return view('admin.action.admin', compact('client', 'voiture', 'contact'));
	}

	public function setting(Request $request) {
		if ($request -> isMethod('post')) {
			$input = $request -> all();
			$id = Auth::user() -> id;
			$user = User::findOrFail($id) -> update($input);
			if ($user) {
				return redirect('Setting') -> with('info', 'Mise à jour des paramètre effectuée!');
			}
		}
		return view('admin.action.setting');
	}

	public function password(Request $request) {
		if ($request -> isMethod('post')) {
			$this -> validate($request, [
			'password' => 'required', 
			'password_confirmation' => 'required|same:password', 
			]);
			$id = Auth::user() -> id;
			$input = $request -> all();
			$input['password'] = bcrypt($input['password']);
			$user = User::findOrFail($id) -> update($input);
			if ($user) {
				return redirect('Password') -> with('info', 'Mise à jour du mot de passe réussie!');
			}
		}
		return view('admin.action.password');
	}

}
