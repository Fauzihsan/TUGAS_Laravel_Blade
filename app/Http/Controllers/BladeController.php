<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function index()
    {
        $users = array(
            0 => 'Ihsan(Admin)',
            1 => 'Fauzi(Manager)',
        );


        return view('pages.home', compact('users'));
    }

    public function inputBarang()
    {
        return view('pages.inputBarang');
    }

    public function updateBarang()
    {
        return view('pages.updateBarang');
    }

    public function deleteBarang()
    {
        return view('pages.deleteBarang');
    }

    public function viewBarang()
    {
        $items = array(
            0 => 'Teh Pucuk Harum',
            1 => 'Ale Ale',
            2 => 'Le Mineral',
            3 => 'Aqua',
            4 => 'Viro',
        );

        $stocks = array(
            0 => '4 Dus',
            1 => '3 Dus',
            2 => '9 Dus',
            3 => '8 Dus',
            4 => '1 Dus',
        );
        return view('pages.viewBarang', compact('items', 'stocks'));
    }
}
