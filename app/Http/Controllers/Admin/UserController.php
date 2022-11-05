<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\Admin\User as Validate_User;
use Illuminate\Support\Facades\Storage;
use File;

class UserController extends Controller {

    public function index() {
        $tit_user = 'Conta de Acesso';

        $users = User::OrderBy('name')->get();

        return view('admin.users.index', [
            'tit_user' => $tit_user,
            'users' => $users
        ]);
    }

    public function create() {
        $tit_create = 'Criar Conta';

        return view('admin.users.create', [
            'tit_create' => $tit_create
        ]);
    }

    public function store(Validate_User $request) {
        $userCreate = User::create(
                        $request->all()
        );

        if (!empty($request->file('cover'))) {
            $userCreate->cover = $request->file('cover')->store('photo_user');
            $userCreate->save();
        }

        return redirect()->route('admin.users.create')->with('message', 'Conta criada com sucesso!');
    }

    public function edit($id) {
        $tit_edit = 'Editar';

        $user = User::where('id', $id)->first();

        return view('admin.users.edit', [
            'user' => $user,
            'tit_edit' => $tit_edit
        ]);
    }

    public function update(Validate_User $request, $id){
        $user = User::where('id', $id)->first();

        if (!empty($request->file('cover'))) {
            Storage::delete($user->cover);
            $user->cover = '';
        }

        $user->fill($request->all());

        if (!empty($request->file('cover'))) {
            $user->cover = $request->file('cover')->store('photo_user');
        }

        if (!$user->save()) {
            return redirect()->back()->withInput()->withErrors();
        }

        return redirect()->route('admin.users.edit',[
            $user->id
        ])->with('message', 'Conta editado com sucesso!');
    }

    public function destroy($id){
        $user = User::find($id);

        $user->delete();

        return redirect()->route('admin.users.index')->with('message', 'Conta enviada para lixeira!');
    }

    public function search_user(Request $request){
        $tit_user = 'Pesquisado';

        $users = User::where( 'id', '=', "%{$request->search_user}%" )

        ->orWhere( 'name', 'LIkE', "%{$request->search_user}%" )
        ->paginate();

        return view( 'admin.users.index', [
            'users' => $users,
            'tit_user' => $tit_user
        ]);

    }

}
