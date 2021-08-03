<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;

class AuthController extends Controller
{
    public function me()
    {
        return
        [
            "NIP" => 290956543,
            "Nama" => "Ermayy",
            "gender" => "Perempuan",
            "phone" => 6288232276269,
            "class" => "kk4 B RPL 2"
        ];
    }
}