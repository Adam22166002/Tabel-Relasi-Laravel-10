<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function generateUserReport()
    {
        // Logika untuk mengambil data pengguna dari model
        $users = \App\Models\AuthModel::all();

        // Kembalikan tampilan dengan data pengguna
        return view('reports.user_report', compact('users'));
    }
}
