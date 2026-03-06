<?php

namespace App\Http\Controllers;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // tambah data user dengan Eloquent Model
        $data = [
            'nama' => 'Pelanggan Pertama',
        ];
        UserModel::where('username', 'customer-1') ->update($data); // update data user
    
        // coba akses model user model
        $user = UserModel::all(); // Mengambil semua data dari tabel m_user menggunakan model UserModel
        return view('user', ['data' => $user]); // Mengirim data ke view
    }
}
