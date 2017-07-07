<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employees;
use App\authentication;
use DB;
use Illuminate\Support\Facades\Crypt;

class dbmscontroller extends Controller
{
    public function viewall(Request $request){

    	if($request->session()->exists('user')){
    		$records=employees::all();
    		return view('dbms/viewall')->with('records',$records);
    	} else {
    		return redirect('/login');
    	}
    
    }

//    	$records=employees::all();
//    	return view('dbms/viewall')->with('records',$records);

    public function testview(){
//            $records=employees::all();
            $records=DB::table('employees')
            ->paginate(4)
//            ->select('firstname','lastname')
//            ->where('department','like','%min%')
//            ->where('department','=','hr')
//            ->wherenotbetween('id', [1,10])
//            ->wherebetween('id', [1,1007])
//            ->wherein('id', [5,6,8])
//            ->whereNotin('id', [5,6,8])
//            ->wherenull('pic')
//            ->orderBy('lastname','asc')
//            ->take(3)

//            ->where('department','hr')
//            ->orwhere('lastname','da vinci')


 //           ->get();

                ;

//            ->count();
//            ->max('id');
//            ->min('id');

 //           return $records;

            return view('dbms/viewall')->with('records',$records);

    }

    public function testadd(){
        DB::table('employees')
        ->insert(
//            ['firstname'=>'red','lastname'=>'one'],
            [
            ['firstname'=>'green','lastname'=>Crypt::encryptString('two')],
            ['firstname'=>'yellow','lastname'=>Crypt::encryptString('four')]
            ]
            );
        return "record added";
    }

    public function testdecrypt(){
/*        $surname17=DB::table('employees')
            ->where('id','=',17)
            ->select('lastname')
            ->get();
*/

//        <<< this returns an object type not a string >>>
        $surname17=DB::table('employees')
            ->where('id','=',1011)
            ->select('lastname')
            ->get();

//        $decrypted=Crypt::decryptString($surname17);
//        $decrypted=Crypt::decryptString('eyJpdiI6Ik5SZ3RhaVB3aGYxZHNvSE1JUHhJaEE9PSIsInZhbHVlIjoiVG8rWXpLazM3Njh3WVU1d20yQ3U3dz09IiwibWFjIjoiODA1MmU4NjI3ZWY1NmNlNWRmYmQxMDk4MGIyMDlhNDE1M2NjMWFlMzdhZWFiMWYyNjRkNzNhYzRiYTFkNDNkYSJ9');
        $decrypted=Crypt::decryptString($surname17['0']->lastname);

        return $decrypted;


    }

    public function testupdate(){
        DB::table('employees')
        ->where('id',1008)
        ->update(
            ['department'=>'admin','position'=>'assist']
            );

        return "update ok";
    }

    public function testdelete(){
        DB::table('employees')
            ->wherebetween('id',[1005,1008])
            ->delete();

            return "delete ok.";
    }


    public function clearauthentication(){
        DB::table('authentication')
        ->truncate();

        return "authentication table cleared";

    }



    public function search(Request $request){
    	if($request->session()->exists('user')){
    		return view('dbms/search');
    	} else {
    		return redirect('/login');
    	}
    	}	

    public function searchresult(Request $request){
    	$data=$request->all();
    	$sql="select * from employees where ".
    			$data['combo1'].
    			" like '%" .$data['text1']."%'";
    	$records=DB::select($sql);

    	return view('dbms/searchresult')->with('records',$records);

    }

    public function insert(Request $request){
    	if($request->session()->exists('user')){
    	return view('dbms/insert');
    	} else {
    		return redirect('/login');
    	}
    }

    public function insertprocess(Request $request){
//    	$data=$request->all();		
			$data=$request->except('file1');
			$file1=$request->file('file1')->getclientoriginalname();

    	$sql = "insert into employees (firstname, lastname, department, position, pic) values ('".
    		$data['text1']."','".
    		$data['text2']."','".
    		$data['combo1']."','".
    		$data['combo2']."','".
    		$file1."')";

    	DB::insert($sql);

    	$path=$request->file('file1')->move(public_path('profile'),$file1);

//    	return "record ".$data['text1']." ".$data['text2']." added. <br />picture save to: ".$path;
    	return "record ".$data['text1']." ".$data['text2']." added. <br />
    		picture save to: ".$path.

    		"<script type='text/javascript'>

    		setTimeout(\"location.href='http://localhost/project1/viewall';\",2000)

    		</script>";
    	}


    	public function delete(Request $request){
    		if($request->session()->exists('user')){
    		 return view('dbms/delete');
    		} else {
    		return redirect('/login');
    	}
    	}

    	public function deleteprocess(Request $request){
    		$data=$request->all();
    		$sql="delete from employees where id='".$data['text1']."'";
    		DB::delete($sql);

    		return "record deleted. 
    		<script type='text/javascript'>
    		setTimeout(\"location.href='http://localhost/project1/viewall';\",2000)
    		</script>";

    	}

    	public function deletequick($id){
    		$sql="delete from employees where id='".$id."'";
    		DB::delete($sql);

    		return "record deleted. <script type='text/javascript'>

    		setTimeout(\"location.href='http://localhost/project1/viewall';\",2000)

    		</script>";
    	}

    	public function update(Request $request){
	    	if($request->session()->exists('user')){
    		return view('dbms/update');
    	} else {
    		return redirect('/login');
    	}
    	}

    	public function updatedisplay(Request $request){
    		$data=$request->all();

    		$sql="select * from employees where ".
    			$data['combo1']."='".
    			$data['text1']."'";

    		$records=DB::select($sql);
    		return view('dbms/updatedisplay')->with('records',$records);
    	}

    	public function updateprocess(Request $request){
    		$data=$request->except('file1');

    		$sql="update employees set 
    				firstname='".$data['text1']."',
    				lastname='".$data['text2']."',
    				department='".$data['text3']."',
    				position='".$data['text4']."' where id='".$data['text0']."'";

    		DB::update($sql);

    		return "update ok. <script type='text/javascript'>

    		setTimeout(\"location.href='http://localhost/project1/viewall';\",2000)

    		</script>";
    	}


    	public function updatequick($id){
    		$data=$request->except('file1');

    		$sql="select * from employees where id='".$id."'";

    		$records=DB::select($sql);
    		return view('dbms/updatedisplay')->with('records',$records);
}
		
		public function login(){
			return view('dbms/login');
		}

		public function logincheck(Request $request){
			$data=$request->all();
			$sql="select * from authentication where username='".
					$data['text1']."' and password='".$data['text2']."'";

			$records=DB::select($sql);

			if($records){
				$request->session()->put('user',$data['text1']);
				return "Welcome! You will be redirected shortly... 
				<script type='text/javascript'>

    		setTimeout(\"location.href='http://localhost/project1/viewall';\",2000)

    		</script>";
			} else {
				$request->session()->flush();
				return "wrong credentials. <script type='text/javascript'>

    		setTimeout(\"location.href='http://localhost/project1/viewall';\",2000)

    			</script>";

			}
		}

		public function logout(Request $request){
			$request->session()->flush();
			return "successfully logged out. 
				<script type='text/javascript'>

    		setTimeout(\"location.href='http://localhost/project1/viewall';\",2000)

    			</script>";
		}
}


