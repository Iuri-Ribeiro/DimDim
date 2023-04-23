<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {

        $transactions = array(
            array(
                "date" => "21/04/2023",
                "description" => "Salario",
                "value" => "2.000,00",
                "type" => "Entrada"
            ),
            array(
                "date" => "22/04/2023",
                "description" => "Supermercado",
                "value" => "77,86",
                "type" => "Saída"
            ),
            array(
                "date" => "22/04/2023",
                "description" => "Mesada",
                "value" => "200,00",
                "type" => "Saída"
            ),
            array(
                "date" => "22/04/2023",
                "description" => "Supermercado",
                "value" => "84,60",
                "type" => "Saída"
            )
        );
        return view('home', ['transactions' => $transactions]);

    }
}