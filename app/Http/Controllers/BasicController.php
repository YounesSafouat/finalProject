<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Pay;
use App\Models\Provider;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\user_course_pivote;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
class BasicController extends Controller
{

    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return view('frontEnd');
    }
    public function index1($user)
    {
        $user = User::where('id', '=', $user)->first();
        $user_id = $user->id;
        $user_name = $user->name;
        $courses = Course::all();
        $courses_slide = Course::where('slide','=',true)->get();
        return view('showCourse', compact('courses', 'user_id', 'user_name','courses_slide'));
    }
    public function createcourse($user)
    {
        $user = User::where('id', '=', $user)->first();
        $user_id = $user->id;

        return view('addCourse', compact('user_id'));
    }
    public function storecourse(Request $request ,$user)
    {
         $user = User::where('id', '=', $user)->first();
         $provider = Provider::where('mail', '=', $user->email)->first();
         $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
        $i = $request->file('image')->getClientOriginalName();
        if (isset($provider)) {
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $path = $image->store('public/images/');
            }else{
                return abort(404);
            }
           $course =  Course::create([
            'title'=> $request->title,
            'descreption'=> $request->description,
            'provider_id'=> $provider->id,
            'img'=> $i,
        ]);
        }else{
            $p = Provider::create([
                'name' => $user->name,
                'mail' => $user->email,
                'facebook' => $user->facebook,
                'tweet' => $user->tweet,
                'linkden' => $user->linkden,
            ]);
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $path = $image->store('images/courses/');
            }else{
                return abort(404);
            }
           $course =  Course::create([
            'title'=> $request->title,
            'descreption'=> $request->description,
            'provider_id'=> $p->id,
            'img'=> $request->file('image')->getClientOriginalName()]);

        }
        return redirect()->route('createlesson',[$user->id,$course->id]);

    }
    public function createlesson($user,$course)
    {
        $user = User::where('id', '=', $user)->first();
        $user_id = $user->id;

        return view('addLesson', compact('user_id','course'));
    }
    public function storelesson(Request $request ,$user,$course)
    {
         $user = User::where('id', '=', $user)->first();
         $provider = Provider::where('mail', '=', $user->email)->first();
         $lessons = Lesson::where('course_id', '=', $course)->count();
        $request->validate([
            'title'=>'required',
            'url'=>'required',
        ]);
        Lesson::create([
            'title'=> $request->title,
            'url'=> $request->url,
            'course_id'=> $course,
            'lesson_number'=> $lessons + 1,
        ]);
        return redirect()->route('allCourse',$user->id);

    }

    public function index2($user)
    {
        $user = User::where('id', '=', $user)->first();
        $user_id = $user->id;
        $courses = $user->course;
        $payments = Pay::where('user_id', '=', $user);

        return view('myCourses',compact('courses','user_id','payments'));

    }
    public function index3($user)
    {
        $user = User::where('id', '=', $user)->first();
        $user_id = $user->id;
        $courses = Course::all();
        return View('payment', compact('courses', 'user_id','user'));
    }
    public function index4($user)
    {
        $user = User::where('id', '=', $user)->first();
        $user_id = $user->id;
        $user_email = $user->email;
        $providers = Provider::where('mail','=',$user_email)->paginate(4);
        return View('profile', compact('providers', 'user_id'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeLog(Request $request)
    {
        $user = User::where('email', '=', $request->email)->get();
        if ($user) {
            $user_pass = $user[0]->password;
            if ($user_pass == $request->password) {

                return route('allCourse', $user[0]->id);
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public function storeRegi(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required ',
            'email' => 'required ',
            'password' => 'required | between : 5,25 '
        ]);
        if ($validator->fails()) {

            return false;
        }else{
            $user = User::create([
                "name" => $request->name,
                "email" => $request->email,
                "password" => $request->password,
            ]);
            return route('allCourse', $user->id);
    }

    }

    /**
     * Display the specified resource.
     */
    public function show($user, $id)
    {

        $user = User::where('id', '=', $user)->first();
        $user_id = $user->id;
        $provider = Provider::where('mail','=',$user->email)->first();
        $lessons = Lesson::where('course_id', '=', $id)->get();
        $pay = Pay::where('user_id', '=', $user_id)->first();
        $hav = user_course_pivote::where('user_id', '=', $user_id)->where('course_id', '=', $id)->first();
        if (!isset($pay)) {
            if (isset($lessons) ) {
                $lesson = Lesson::where('course_id', '=', $id);

                if (isset($lesson)) {
                    $FirstLesson = $lesson->where('lesson_number', '=', 1)->get();
                }
            }
            if (isset($hav)) {
                return View('watchVideo', compact('lessons', 'FirstLesson','user_id','user','provider','id'));
            }else{
                user_course_pivote::create([
                    'course_id' => $id,
                    'user_id' => $user_id
                ]);
                return View('watchVideo', compact('lessons', 'FirstLesson','user_id','user','provider','id'));

            }
        }else{
            return redirect()->route('creatPay',[$user,$id]);
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function creatPay($user, $id)
    {
        return view('pay',compact('id','user'));
    }
    public function storePay(Request $request,$user, $id)
    {
        $user = User::where('id', '=', $user)->first();
        $request->validate([
            'Name'=>'required',
            'CardNumber'=>'required',
            'Expiry'=>'required',
            'plane'=>'required',
            'CVVCVC'=>'required',
        ]);
        Pay::create([
            'Name'=> $request->Name,
            'CardNumber'=> $request->CardNumber,
            'CVVCVC'=> $request->CVVCVC,
            'Expiry'=> $request->Expiry,
        ]);
        $user->update(['package'=>$request->package]);
        return $request;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
