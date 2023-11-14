<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\Jawatan;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function index() : View
    {
        $user = auth()->user();
        $jawatan = Jawatan::pluck('nama');

        return view('users.profile', [
            'user' => $user,
            'jawatan' => $jawatan
        ]);
    }

    public function update(UpdateProfileRequest $request): RedirectResponse
    {

        $user = auth()->user();

        $input = $request->all();

        if(!empty($request->password))
        {
            $input['password'] = Hash::make($request->password);
        }else
        {
            $input = $request->except('password');
        }

        if ($request->hasFile('photo')) 
        {
           $filePath = Storage::disk('public')->put('photo-profile', request()->file('photo'));
           $input['photo'] = $filePath;
           if($request->photo_lama) {
           Storage::disk('public')->delete($request->photo_lama);
           }
       }
       
        $user->update($input);

        return redirect()->back()
                ->withSuccess('Profile is updated successfully.');
    }
}
