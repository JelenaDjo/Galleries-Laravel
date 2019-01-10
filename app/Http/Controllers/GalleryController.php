<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
// use App\Http\Requests;

class GalleryController extends Controller
{
    public function getAllGalleries(Request $request) {
        // $gallerties = Gallery::with('user')->with(['pictures' => function($picture){ // vraca sve galerija sa userima i slikama
        //     return $picture->orderBy('created_at', 'asc')->first(); // kada vraca slike ulazi u funkciju koja vraca prvu dodatu sliku 
        // }])->get();

        $galleries = Gallery::with(['user', 'pictures']);

        return $galleries;
    }


}
