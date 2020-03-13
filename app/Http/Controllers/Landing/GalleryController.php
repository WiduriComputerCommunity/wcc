<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
  public function index()
  {
    return view ('landing.gallery');
  }
}