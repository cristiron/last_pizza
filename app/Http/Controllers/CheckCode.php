<?php

namespace amuu\Http\Controllers;

use amuu\Http\Requests\Rec;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use amuu\User;

use Illuminate\Support\Facades\Validator;

class CheckCode extends Controller
//{
//    public function auc(Request $request)
////    {  return view('invited');
//    {
//        $name=User::all();
//foreach($name as $n){ $b=$n->name;echo $b;
//    $a=$request->name;
//        if($a == $b) {
//
////            return redirect()->intended('invited');
////            return redirect('invited')->with([$a => $request->name]);
//            return redirect()->route('invget', ['id' => $b]);
//
//    }}}
{
    public function auc(Request $request)
    {
        $this->validate($request, [

            'g-recaptcha-response' => 'required|recaptcha',
//            'g-recaptcha-response' => 'required|captcha',
        ]);

        $a = $request->name;
        $n = User::where('name', $a)->get();

        foreach ($n as $x) {
            if ($x != null) {
                $y = $x->name;
                $request->session()->flash('cucu','cu');
                return redirect()->route('invget',['id' => $y]);
            }
        }
        echo $a . '  is not a valid user';


    }

//        $a = $request->name;
//        $n = User::where('name', $a)->get();
//        if ($n != null) {
//            foreach ($n as $x) {
//                echo $y = $x->name;
//                return redirect()->route('invget',['id' => $y] );
//            }
//        }
//        echo $a . '  is not a valid user';
//    }


    public function show($id)
    {
        if (session()->has('cucu')) {

            return view('invited', ['shit' => $id]);
        }

         else return redirect('/');
    }

}
//        echo '<pre>';
//        dd($request->_token);
//        echo '<pre>';