<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportBarangController extends Controller
{
    public function index()
    {
        return view('inventory.report.index');
    }
}
