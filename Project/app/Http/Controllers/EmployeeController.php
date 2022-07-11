<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use PDF;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employees::all()->except(['created_at', 'updated_at']);
        return view('employees', compact('employee'));
    }

    public function print_pdf()
    {
        $employee = Employees::all()->except(['created_at', 'updated_at']);

        $pdf = PDF::loadview('employees_pdf', compact('employee')); //loadview(nama-view, data yang dikirim);
        return $pdf->download('daftar-pegawai-pdf');
    }
}
