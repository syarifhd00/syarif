<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function one(Request $request){
    	$data = '';
    	$number = '';
    	if(!empty($request->val)){
    		$data = $this->cek_one($request->val);
    		$number = $request->val; 
    	}

    	$params = [
    		'data' => $data,
    		'number' => $number
    	];

    	return view('one',$params);
    	
    }

    function cek_one($val){
    	$all = str_split($val);
    	$jml = count($all);
    	$var = 0;
    	foreach ($all as $key => $value) {
    		$var = $var+pow($value,$jml);
    	}

    	if($val==$var){
    		return 'true';
    	}else{
    		return 'false';
    	}
    }

     public function three(Request $request){
    	$data = '';
    	$number = '';
    	if(!empty($request->val)){
    		$data = 'Index Ke: '.$this->cek_three($request->val);
    		$number = $request->val; 
    	}

    	$params = [
    		'data' => $data,
    		'number' => $number
    	];

    	return view('three',$params);
    	
    }

    function cek_three($val){
    	$array = [
    		"red", "blue", "yellow", "black", "grey"
    	];
    	$cari = array_search($val, $array);
		return $cari;
		
    }

    public function four(Request $request){
    	$array = $request->number;
    	$remove = $request->val;
    	$result = str_replace($request->val, '', $array);
    	$params = [
    		'array' => $array,
    		'remove' => $remove,
    		'result' => $result,
    	];

    	return view('four',$params);
    	
    }
}
