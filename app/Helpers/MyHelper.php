<?php

use Facade\FlareClient\Stacktrace\File;
use Illuminate\Support\Str;
use Intervention\Image\Image;

if (!function_exists('saveFile')) {
    function saveFile($name, $photo)
    {
        /**
         * uploadFile
         *
         * @param
         * @return
         */
        
        $images = Str::slug($name) . time() . '.' . $photo->getClientOriginalExtension();
        
        $path = public_path('uploads/product');

        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }
        Image::make($photo)->save($path . '/' . $images);
        return $images;
    }
}

if (!function_exists('deleteFile')) {
    /**
     * uploadFile
     *
     * @param
     * @return
     */
    function deleteFile($dir, $photo)
    {
        return File::delete(public_path($dir . $photo));
    }
}
