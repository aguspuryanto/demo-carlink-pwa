<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // return view('welcome_message');
        return view('home');
    }

    public function proses(): string
    {
        return view('proses');
    }

    public function layanan(): string
    {
        return view('layanan');
    }

    public function history(): string
    {
        return view('history');
    }

    public function akun(): string
    {
        return view('akun');
    }
}
