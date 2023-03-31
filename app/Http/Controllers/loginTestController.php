<?php

namespace App\Http\Controllers;

use App\Models\loginTest;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;



class loginTestController extends Controller
{
    public function login (){
        return view('welcome');
    }
    public function verifLogin(Request $request){
        $email = $request->input('email');
        $password = $request->input('mdp');

        $user = loginTest::where('email', $email)->first();

        if ($user && password_verify($password, $user->password))
        {
            return redirect('/succes')->with('user', $user);
            //return redirect('/succes');
        }else{
            return back()->with('error', 'Vos identifiants sont incorrects');
        }

    }

    public function singUp(){
        return view('singUp');
    }
    public function insertSingUp(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $email2 = $request->input('email2');
        $mdp = $request->input('mdp');
        $mdp2 = $request->input('mdp2');

        if ($email == $email2 && $mdp==$mdp2){
            $userinsert = loginTest::where('email', $email)->where('name', $name)->first();
            if (!$userinsert){
                $userinsert = new loginTest();
                $userinsert->name = $name;
                $userinsert->email = $email;
                $userinsert->password = bcrypt($mdp);
                $userinsert->created_at = Carbon::now();
                $userinsert->updated_at = Carbon::now();
                $userinsert->save();
                return redirect('succes')->with('user', $userinsert);

            }
            else{
                return back()->with('error', "L'utilisateur existe déjà");
            }
        }else{
            return back()->with('error', 'Votre email ou votre mot de passe ne correspond pas');
        }
    }

    public function succes(){

        return view('succes');
    }

    public function logout(Request $request){
        session()->flush();
        return redirect('/');
    }
}
