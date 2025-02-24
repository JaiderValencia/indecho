<?php

namespace App\Http\Utils;
use Storage;
use Ramsey\Uuid\Uuid;

class FilesUtils
{
    public static function saveFile($path, $file)
    {
        $extension = explode('/', $file->getMimeType())[1];

        $name = Uuid::uuid4() . '.' . $extension;        

        return '/storage/' . (Storage::disk('public')->putFileAs($path, $file, $name));
    }

    public static function deleteFile($path)
    {
        $path = str_replace('storage/', '', $path);

        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}
