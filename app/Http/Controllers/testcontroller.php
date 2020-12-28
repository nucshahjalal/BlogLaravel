<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testcontroller extends Controller
{
    function testing(){
    	return view('testing');
    }
    function html(){
    	return view('html');
    }

function sub(){
    return view('menu');//incomplete
}


 function myfun($fname,$lname,$value){
 	//https://www.youtube.com/watch?v=CqIf-BqfsCk  part 13 without view
    	//return 'Frist Name :'.$fname. "<br>". 'Last Name : '.$lname. "<br>". 'Value :'.$value;
 return view ('pptView',['fname'=>$fname,'lname'=>$lname,'value'=>$value]);

 	
 	//https://www.youtube.com/watch?v=-uaBbyjV8-Y   view hota parameter pass
    }




function  showdata(){
	$data=array("HTML","CSS","JAVASCRIPT","PHP");
	return view('arrayPage',['language'=>$data]);
	//https://www.youtube.com/watch?v=-F4PNwHFYos
}



function  forelseloop(){
	$data=array("HTML","CSS","JAVASCRIPT","PHP");
	return view('forelse',['language'=>$data]);
	//https://www.youtube.com/watch?v=-F4PNwHFYos
}


function  elseif(){
   // $data=array("HTML","CSS","JAVASCRIPT","PHP");
    $logstatus=false;
     return view('elseif',['logkey'=>$logstatus]);
   // return view('elseif',['language'=>$data,'logkey'=>$logstatus]);
    //https://www.youtube.com/watch?v=CTkjOYZ46Vg
}




function  loop(){
    $data=array("HTML","CSS","JAVASCRIPT","PHP","PHP","PHP","PHP","PHP");
     return view('loop',['datakey'=>$data]);
   //index,iteration,remaining,first,last,odd,even,depth
    //https://www.youtube.com/watch?v=yakbWl21NGE
}

     }
   



