<?php

namespace Overload\Http;

use Illuminate\Routing\Controller as BaseController;
use Overload\Model\Overload;
use Overload\Service\Validator;

class MainController extends BaseController {

	public function index() {
		
		// ecriture de session.
		session('overload','Overload');

		// lecture dans la session.
		session('overload');

		// appelle au repository.
		$overloads = Overload::all();

		//validations
		foreach( $overloads as $overload ) {
			
			$validator = new Validator($overload, [
				'id' => 'integer|min:1',
				'fixedString' => 'min:28|max:30', 
				'variableString' => 'min:31|max:33',
				'date' => 'date_format:Y-m-d'

			],[
				'id' => 'La clef doit être un entier supérieur à zéro',
				'fixedString' => 'fixedString doit comporter entre 28 et 30 caractères',
				'variableString' => 'variableString doit comporter entre 31 et 33 caractères',
				'date' => 'La date doit être au format Y-m-d'
			]);

			$errors = '';
			try { 
				
				$validator->validate();
			
			} catch (\Exception  $e ) {
				foreach( $e->getErrors()->getMessages() as $message ) {
					
					foreach( $message as $text ) {
						$errors.=$text;
					}
				}
			}
		}
		
		return view('overload::overload', ['overloads' => $overloads , 'errors' => $errors ]);
	
	}
}