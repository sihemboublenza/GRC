<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        if (AuthenticateController::isAdmin())
        {
            $users = User::all();
            return view ('admin.user.list')->with('users', $users);
        }
        else return redirect ('dashboard')->with('success', 'You are not admin');
    }
    public function show($id)
    {
        if (AuthenticateController::isAdmin())
        {
            $users = User::find($id);
            return view('admin.user.show')->with('users', $users);
        }
        else return redirect ('dashboard')->with('success', 'You are not admin');
    }
    public function create()
    {
        if (AuthenticateController::isAdmin())
        {
            return view('admin.user.create');
        }
        else return redirect ('dashboard')->with('success', 'You are not admin');
    }
    public function store(Request $request)
    {
        if (AuthenticateController::isAdmin())
        {
            $input = $request->all();
            User::create($input);
            return redirect('user')->with('flash_message', 'Utilsiateur ajouté !');
        }
        else return redirect ('dashboard')->with('success', 'You are not admin');
    }
    public function edit($id)
    {
        if (AuthenticateController::isAdmin())
        {
            $users = User::find($id);
            return view('admin.user.edit')->with('users', $users);
        }
        else return redirect ('dashboard')->with('success', 'You are not admin');
    }
    public function update(Request $request, $id)
    {
        if (AuthenticateController::isAdmin())
        {
            $users = User::find($id);
            $input = $request->all();
            $users->update($input);
            return redirect('user')->with('flash_message', 'Utilsiateur modifié !');
        }
        else return redirect ('dashboard')->with('success', 'You are not admin');
    }
    public function destroy($id)
    {
        if (AuthenticateController::isAdmin())
        {
            User::destroy($id);
            return redirect('user')->with('flash_message', 'Utilsiateur supprimé !');
        }
        else return redirect ('dashboard')->with('success', 'You are not admin');
    }
}
