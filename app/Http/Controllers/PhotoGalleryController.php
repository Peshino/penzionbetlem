<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PhotoGalleryController extends Controller
{
    /**
     * Display
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allowedImageExtensions = ['jpeg', 'JPEG', 'jpg', 'JPG', 'png', 'PNG'];
        $variant = config('variants.name');
        $photosDirectory = 'photos/' . $variant;
        $interiorPhotosDirectory = $photosDirectory . '/interior';
        $exteriorPhotosDirectory = $photosDirectory . '/exterior';
        $photos = [];

        $files = Storage::disk('public')->allFiles($photosDirectory);

        if (!empty($files)) {
            foreach ($files as $file) {
                if (!in_array(File::extension($file), $allowedImageExtensions)) {
                    continue;
                }

                if (strpos($file, $exteriorPhotosDirectory) !== false) {
                    $photos[$variant]['exterior'][] = $file;
                } else {
                    $photos[$variant]['interior'][] = $file;
                }
            }
        }

        return view('photo-gallery', compact('photos', 'variant'));
    }
}
