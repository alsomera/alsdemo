<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\authentication;
use Illuminate\Support\Facades\Storage;

class eloq extends Controller
{
    //
    public function viewall(){
//    	$records=authentication::all()		
//    	$records=authentication::wherebetween('id',[1,5])
//    	$records=authentication::orderBy('username','desc')    	
    	$records=authentication::paginate(3);
//    	->where('username','jose')
    	
//    	->orderBy('username')
//    	->take(5);
//    	->get();


    	$count=authentication::all()
//    	->count();
    	-> max('id');


//    	return $count;

    	return view('eloq/viewall')->with('records',$records);
    }

    public function insert(){

    	$authentication = new authentication;
    	$authentication->username="henry";
    	$authentication->password="see";

    	$authentication->save();

    	return "record added.";
    }

    public function update(){
    	$authentication=authentication::find(12);
    	$authentication->password="123";
    	$authentication->save();

    	return "update ok.";

    }


    public function delete(){
    	$authentication=authentication::find(13);
    	$authentication->delete();

    	return "delete ok.";

    }

    public function createfile(){

    	$file1=Storage::disk('local')->put('sample/file1.mlg','hello there');

    	if($file1){
    		return "create ok";
    	} else {
    		return "create failed";
  
    	}
    }

	public function write(){

		$content="i am here sa dulo \n";

//    	Storage::prepend('file1.txt',$content);
    	Storage::append('file1.txt',$content);    	
		return "create ok";
    	}

    public function read(){

    	$content=Storage::disk('local')->get('file1.txt');
    	$size=Storage::size('file1.txt');

    	return $content."<br />size:".$size." bytes";

    }

   public function deletefile1(){

    	Storage::delete('sample/file1.txt');

    	return "delete ok.";

    }

   public function makefolder1(){

    	Storage::makeDirectory('folder1');
    	return "folder1 created.";
    }

   public function deletefolder1(){

    	Storage::deleteDirectory('folder1');
    	return "folder1 deleted.";
    }


}
