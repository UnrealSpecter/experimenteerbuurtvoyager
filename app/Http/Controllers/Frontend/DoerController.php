<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use Intervention\Image\ImageManagerStatic as Image;

use App\User;
use App\Http\Requests\UserFormRequest;
use App\Http\Requests\ChangePasswordFormRequest;
use Carbon\Carbon;

class DoerController extends Controller
{
    public function index()
    {
        $doers = User::all()->sortByDesc('id');
        return view('frontend.doer.index', compact('doers'));
    }

    public function create()
    {
        return view('frontend.doer.create');
    }

    public function store(UserFormRequest $request)
    {
        $request->request->add(['isAdmin' => false]);

        // create doer model based on request
        $user = User::create($request->all());
        $user->password = Hash::make($user->password);

        // IMAGE UPLOAD
        $path = public_path('uploads/user_images');
        $thumbPath = public_path('uploads/user_images/thumbs/');
        if(!File::isDirectory($path))
        {
            File::makeDirectory($path, 0777, true, true);
        }
        if(!File::isDirectory($thumbPath))
        {
            File::makeDirectory($thumbPath, 0777, true, true);
        }

        $fileName = $user->id . "." . Input::file('profile_image')->getClientOriginalExtension();

        $path = public_path('uploads/user_images/' . $fileName);

        Image::make(Input::file('profile_image'))->save($path);

        $user->profile_image = $fileName;

        //save thumbnails while saving profile image of doer with constrained aspects.
        $image = $request->file(Input::file('profile_image'));
        //resize image to width
        $thumb = Image::make(Input::file('profile_image'));
        if($thumb->width() > $thumb->height()){
                $thumb->resize(400, 300);
        }
        else {
                $thumb->resize(350, 400);
        }
        //save thumb
        $thumb->save($thumbPath . $user->id . "." . Input::file('profile_image')->getClientOriginalExtension());

        //get youtube id
        if($request->video){
            $parts = parse_url($request->video);
            parse_str($parts['query'], $query);
            $youtubeId = $query['v'];
            $user->video = $youtubeId;
        }

        $user->email_visibility = $request->email_visibility;
        $user->phone_number_visibility = $request->phone_number_visibility;

        // store doer in database
        $user->save();
        $request->session()->flash('alert', 'Profiel succesvol aangemaakt!');
        return redirect()->route('doener.index');
    }

    public function update(UserFormRequest $request, $id)
    {
        // create doer model based on request
        $user = User::findOrFail($id);
        $user->update($request->all());
        $user->password = Hash::make($user->password);

        // IMAGE UPLOAD
        $path = public_path('uploads/user_images');
        $thumbPath = public_path('uploads/user_images/thumbs/');

        if($request->profile_image){
            $fileName = $user->id . "." . Input::file('profile_image')->getClientOriginalExtension();
            $path = public_path('uploads/user_images/' . $fileName);
            Image::make(Input::file('profile_image'))->save($path);
            $user->profile_image = $fileName;
        }

        //save thumbnails while saving profile image of doer with constrained aspects.
        if($request->profile_image){
            $image = $request->file(Input::file('profile_image'));
            //resize image to width
            $thumb = Image::make(Input::file('profile_image'));
            if($thumb->width() > $thumb->height()){
                    $thumb->resize(400, 300);
            }
            else {
                    $thumb->resize(350, 400);
            }
            // //resize image to height
            // $thumb->resize(null, 200, function ($constraint) {
            //     $constraint->aspectRatio();
            // });
            //save thumb
            $thumb->save($thumbPath . $user->id . "." . Input::file('profile_image')->getClientOriginalExtension());
        }

        //youtube link stuff
        if($request->video){
            $parts = parse_url($request->video);
            parse_str($parts['query'], $query);
            $youtubeId = $query['v'];
            $user->video = $youtubeId;
        }

        $user->email_visibility = $request->email_visibility;
        $user->phone_number_visibility = $request->phone_number_visibility;

        // store doer in database
        $user->save();
        $request->session()->flash('alert', 'Profiel succesvol gewijzigd!');
        return redirect('/doener/' . $user->id);
    }

    public function editPassword(ChangePasswordFormRequest $request, $id){
        //check if matching passwords
        if(\Auth::attempt(['email' => \Auth::user()->email, 'password' => $request->old_password])){
            $user = User::findOrFail($id);
            $user->password = Hash::make($request->new_password);
            $user->save();
            $request->session()->flash('alert', 'Wachtwoord succesvol gewijzigd!');
            return redirect()->back();
        }
        else {
          return redirect()->back()->withErrors('Er is iets foutgegaan? xd');
        }
    }

    public function show($id)
    {
        $doer = User::findOrFail($id);

        return view('frontend.doer.show', compact('doer'));
    }
}
