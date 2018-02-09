<?php namespace amuu\Http\Controllers;

use amuu\Menu;
use amuu\Events\ExampleEvent;
use amuu\Events\OrderCreated;
use amuu\Http\Requests;
use amuu\Http\Controllers\Controller;
//use Illuminate\Http\Request;
//use \Illuminate\Support\Facades\Input;
use \Illuminate\Support\Facades\Request;
use \Illuminate\Support\Facades\Event;
use \Illuminate\Support\Facades\Log;
use \Illuminate\Support\Facades\Validator;

class NewOrderController extends Controller {

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
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function showMenu()
	{
		//
		$menu = Menu::all();
		return view('menu', ['menuList' => $menu]);
	}

	// To show old view purpose only
	public function showMenuLesson8()
	{		
		$menuList = Menu::all();
		return view('lesson_8_menu', ['menuList' => $menuList]);
	}

	public function postOrder()
	{
		log::debug('log::debug(Request::all()) of the function postOrder in NewOrderController:');
//		log::debug(Input::all());
        log::debug(Request::all());
    	//Validation rules
        $rules = array(
			'marinara' 	=> array('required','integer','between:0,3'),
			'margherita' 	=> array('required','integer','between:0,3'),
			'olio' 				=> array('min:1|max:20'),
			'name' 				=> array('required','min:1|max:20'),
			'email' 			=> array('required','email', 'min:1|max:20'),
			'freeOrder'			=> array('exists:menu,dish')
    	);
		// The validator
		$validation = Validator::make(Request::all(), $rules);		
		
		// Check for fails
	    if ($validation->fails()){    	
	        // Validation has failed.
	    	log::error('Validation has failed');
	    	$messages = $validation->messages();
	    	$returnedMsg = "";
	    	foreach ($messages->all() as $message){
			    $returnedMsg = $returnedMsg . " - " . $message;
			}
			log::error('Validation fail reason: '.$returnedMsg);
			return  redirect()->back()->withErrors($validation);
	    }
		log::debug('Validation passed');

		$mess = array('message' => 'message $msg of NewOrderController passed to $message in Event and called by log::debug($event->getMessage()):',
                    'email' => Request::get('email'),
                    'name'  => Request::get('name')
					);
		$response = Event::fire(new ExampleEvent($mess));
		$response = Event::fire(new OrderCreated($mess));

		return view('orderdone', ['msg' => $mess]);
	}

}
