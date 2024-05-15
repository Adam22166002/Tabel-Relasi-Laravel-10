<?php
namespace App\Http\Controllers;

use App\Models\AuthModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    private function validateInput(Request $request, array $rules)
    {
        $validator = Validator::make($request->all(), $rules, $messages = [
            'required' => ':attribute tidak boleh kosong.'
        ]);

        return $validator;
    }

    private function handleValidationFailure($urlRedirect, $validateData)
    {
        return redirect($urlRedirect)
            ->withErrors($validateData)
            ->withInput();
    }

    private function setSessionFlash($detectMessage, $message)
    {
        Session::flash($detectMessage, $message);
    }


    public function index()
    {
        return view("sesi.login");
    }


    public function proses_login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            $this->setSessionFlash('error', 'Silahkan memasukan identitas anda terlebih dahulu');
            return redirect('/login');
        }else if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
                return redirect()->intended('/data');
        } else {
            $this->setSessionFlash('error', 'Proses login gagal. Pastikan anda memasukkan identitas dengan benar.');
            return redirect('/login')->with('failed', 'Email atau Password Salah');
        }
    }

    public function pendaftaran()
    {
        return view('sesi.pendaftaran');
    }

    public function proses_pendaftaran(Request $request){
        
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));

        $pendaftaran = new AuthModel();
        $pendaftaran->email = $email;
        $pendaftaran->password = $password;

        if ($pendaftaran->save()) {
            $this->setSessionFlash('success', 'Proses pendaftaran berhasil.');
            return redirect('/login');
        } else {
            $this->setSessionFlash('error', 'Proses pendaftaran gagal.');
            return redirect('/login/pendaftaran');
        }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        
        Session::flash('success', 'Anda telah berhasil logout.');

        return redirect('/login');
    }
}
