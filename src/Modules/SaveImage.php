<?php

namespace Logixs\Modules;

use Illuminate\Http\UploadedFile;

final class SaveImage
{
    public static function save(UploadedFile $file): string
    {
        /** @var string * */
        $path = $file->store('public/images');

        $path= str_replace("public/","",$path);

        return $path;
    }
}
