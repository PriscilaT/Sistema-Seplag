<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index() {
        return view('login.index');
    }
    
    public function create(Request $request) {
        $funcionario = DB::table('seplagrh.funcionario')->where('cpf', $request->cpf)->first();

        if($funcionario) {
            if(Hash::check($request->password, $funcionario->senha)) {
                $_SESSION['usuario'] = $funcionario;
                return redirect('/funcionario');
            } else {
                return redirect('/');
            }
        }
    }
}
