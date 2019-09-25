<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class Dictionary
{
public function translate(Request $request){
    $text=$request->input('dictionary');
    $tras=null;
    switch ($text){
        case 'application':
            $tras='ung dung';
            break;
        case 'blue':
            $tras='mau xanh';
            break;
        case 'color':
            $tras='mau sac';
            break;
            default:
                break;
    }
    return view('show',compact('tras'));
}
}
