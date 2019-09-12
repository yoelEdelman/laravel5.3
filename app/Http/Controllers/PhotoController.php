<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImagesRequest;
use App\Repositories\PhotosRepository;
use App\Repositories\PhotosRepositoryInterface;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function create()
    {
        return view('photo');
    }

    public function store(ImagesRequest $request, PhotosRepositoryInterface $photosRepository)
    {
        $photosRepository->save($request->image);

        return view('photo_ok');
    }
}
