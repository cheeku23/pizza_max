<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()


    {

        return view('site.home');
    }

    public function productsPage()
    {
        $pizzas = Pizza::all();
        return view('site.products', ['pizzas' => $pizzas]);
    }

    public function productDetailsPage(Pizza $pizza)
    {


        return view('site.product-detail', compact('pizza'));
    }

    public function aboutPage()
    {
        return view('site.about');
    }
    public function contactPage()
    {
        return view('site.contact');
    }
}
