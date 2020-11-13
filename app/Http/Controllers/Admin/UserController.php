<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Exception;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct(Request $request, User $user)
    {
        $this->middleware('auth');
        $this->request = $request;
        $this->user = $user;
    }

    public function cadastroUsuario() {
        try {
            $foto = $this->request->File('image')->store('fotoPerfil/' . $this->request->name );  
            //dd($foto);
            $data = $this->request->all();
            $user = $this->user->create([
                'name' => $data['name'],
                'email' => $data['email'],
                'is_admin' => $data['is_admin'],
                'password' => Hash::make($data['password']),
                'image' =>  $foto,
            ]);
          
            if($user) {
                return redirect()->route('admin.adcUsuario')
                ->with('sucess', 'Cadastro feito com sucesso');
            }
        }catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->route('admin.adcUsuario')
            ->with('error', 'Cadastro falhou');
        }
        

    }   

    public function listarUsuarios() {
        $users = $this->user->all();
        return view('admin.listarUsuarios', [
            'users' => $users,
        ]);
    }

    public function deletarUsuarios($id) {
        $user = $this->user->where('id', $id)->first();
        if(!$user) {
            return redirect()->back();
        }
        $user->delete();
        return redirect()->route('admin.listarUsuario');
    }
}
