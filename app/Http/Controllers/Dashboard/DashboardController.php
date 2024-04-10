<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showProduct()
    {
        return view('backend.pages.product.showProduct');
    }

    public function addProduct()
    {
        return view('backend.pages.product.addProduct');
    }

    public function editProduct()
    {
        return view('backend.pages.product.editProduct');

    }
}
