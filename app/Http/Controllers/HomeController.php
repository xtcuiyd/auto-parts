<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Post;
use App\Part;
use Redirect, Auth, Hash, Session, Validator;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function news()
    {

        return view('news')->withNews(Post::all());
    }
    public function contact()
    {
        return view('contact');
    }
    public function searchParts()
    {
        return view('searchparts')->withRes("");
    }

    public function postSearchParts(Request $request)
    {
        $rules = [/*'captcha'=>'required|captcha',*/'parts_num'=>'required'];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            if($validator->errors()->has('captcha')){
                $notice = 'Captche Input Error';
            }else if($validator->errors()->has('parts_num')){
                $notice = 'Parts Number Input Error';
            }
            session(['message'=>$notice]);
            return redirect()->back();
        } else {
            $res = Part::where('parts_num',$request->input('parts_num'))->first();
            if(!$res){
                session(['message'=>'Parts Number NotFound']);
                return redirect()->back();
            }
            return view('searchparts')->withRes($res);
        }
    }
}
