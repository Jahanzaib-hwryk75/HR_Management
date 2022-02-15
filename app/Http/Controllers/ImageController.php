<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Imagick;;


class ImageController extends Controller
{
    public function index()
    {
        $imgExt = new Imagick();
        $imgExt->readImage(public_path('file.pdf'));
        $imgExt->writeImages('file.jpg', true);

        dd("Document has been converted");
    }
}
