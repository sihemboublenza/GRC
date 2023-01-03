<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view ('admin.user.list')->with('users', $users);
    }
    public function show($id)
    {
        $users = User::find($id);
        return view('admin.user.show')->with('users', $users);
    }
    public function create()
    {
        return view('admin.user.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        User::create($input);
        return redirect('user')->with('flash_message', 'Utilsiateur ajouté !');
    }
    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.user.edit')->with('users', $users);
    }
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $input = $request->all();
        $users->update($input);
        return redirect('user')->with('flash_message', 'Utilsiateur modifié !');
    }
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('user')->with('flash_message', 'Utilsiateur supprimé !');
    }
}
