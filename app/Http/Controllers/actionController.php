<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;
use View;


class actionController extends Controller{
    
	public function signUp(Request $request){
		
		
		$this->validate($request , [
			'first_name' => 'required|min:3|max:60',	
			'last_name' => 'required|min:3|max:60',
		]);
		
		$subscriber = new subscriber();
		$subscriber->first_name = $request->first_name;
		$subscriber->last_name = $request->last_name;
		$subscriber->save();
		
		return view::make('subscribe.thankyou')->with('subscriber', $subscriber->first_name);
				
	}
	
}
