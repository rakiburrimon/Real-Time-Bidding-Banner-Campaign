<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit($id)
    {
        $data['profile'] = User::findOrFail($id);
        return view('profile.edit', $data);
    }

    public function update(UpdateProfileRequest $request, $id)
    {
        $validator = $request->validated();

        if ($validator != '') {
            $profile = User::findOrFail($id);
            $profile->update($validator);
            return redirect()->route('profile.edit', ['id' => $profile->id])->with('success', 'Profile updated successfully');
        }

        return redirect()->back()->withErrors($request->validator->getMessageBag())->withInput();
    }
}
