<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use InterventionImage;

class ImageService
{
  public static function upload($imageFIle, $folderName)
  {
    $fileName = uniqid(rand() . '_');
    $extension = $imageFIle->extension();
    $fileNameToStore = $fileName . '.' . $extension;

    $resizedImage = INterventionImage::make($imageFIle)->resize(1920, 1080)->encode();

    Storage::put('public/' . $folderName . '/' . $fileNameToStore, $resizedImage);

    return $fileNameToStore;
  }
}
