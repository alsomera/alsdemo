<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class Controller1 extends Controller
{
	public function home(){
		return view('set1/myhomepage');
	}	

	public function menu(){
		return view('set1/menu');
	}

	public function page1(){

		//computation or logic
		$firstname="john";
		$lastname= "doe";
//		$data=$firstname." ".$lastname;

		$data['fullname']=$firstname." ".$lastname;
		$data['firstname']=$firstname;
		$data['lastname']=$lastname;

		return view('set1/page1')->with('mydata',$data);
//			->with('mydata',$data)
//			->with('ln',$lastname);
	}

	public function page2(){
		return view('set1/page2');
	}



	public function page3(){

		$data=Input::all();
//		if(isset($data['text1'] && isset($data['text2']))
//		{
		return view('set1/page3')->with('data',$data);
//		}
//		return redirect('page2');
	}

	public function page4(){
		return view('set1/page4');
		}

	public function page5(){

//		$data=Input::all();

		$data['f']=Input::get('txt_first');
		$data['l']=Input::get('txt_last');
		$data['m']=Input::get('txt_mid');				

//		if(isset($data['txt_first'])) {
		if(isset($data['f'])) {
		
		return view('set1/page5')->with('data',$data);
		}
//		
		return redirect('page4');
	}

	public function first(){
		return view('activity1/first');
	}
	public function second(){


		$data=Input::all();
		if(isset($data['num1']) && isset($data['num2']))
		{
			$total = $data['num1'] + $data['num2'];
			return view('activity1/second')->with('total',$total);
		}
		return redirect('first');
	}
	public function third(){
		$data=Input::get('total');
		if (isset($data)){
			return view('activity1/third')->with('x',$data);
		}
		return redirect('first');
		}

	public function child1(){

//		$data="test data & <>";
		$data['a']="test data 1";
		$data['b']="test data 2";
		$data['c']="test data 3";

		return view('day2/child1')->with('data',$data);
	}

	public function child2(){
		return view('day2/child2');
	}


	public function child3(Request $request){

		$data['fn']=$request->input('text1');
		$data['ln']=$request->input('text2');
		$data['token']=$request->input('_token');

		if(isset($data['token'])){
		return view('day2/child3')->with('data',$data);
		}

//		return view('day2/child3')->with('data',$data);
		return redirect('child2');
	}	

	public function child4(){

		$x = 75;

//		if ($x>=75){
//			$data="passed";
//		}else{
//			$data="failed";
//		}

//		return view('day2/child4')->with('data',$data);
		return view('day2/child4')->with('x',$x);
	}	

	public function child5(){
		return view('day2/child5');
	}



	public function register(){
		return view('activity2/register');
	}

	public function registersummary(Request $request){

		$data=$request->all();


		if($data['combo1']=="male"){
			$data['title']="Mr.";
					}else{
						if($data['combo2']=="single"){
							$data['title']="Miss";
					}else{
						$data['title']="Mrs.";
					}

					}
		return view('activity2/registersummary')->with('data',$data);
		}



}