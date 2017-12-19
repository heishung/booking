<?php
/**
 * Created by PhpStorm.
 * User: thehung
 * Date: 05/09/2017
 * Time: 11:32 SA
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Storage;

class ImagesController extends \Illuminate\Routing\Controller
{

    public function uploadImage(Request $request)
    {
        if ($images = $request->file('file')) {
            $full_path = [];
            foreach ($images as $image) {
                $imageName = time() . $image->getClientOriginalName();
                $name_image = str_random(4) . "_" . $imageName;
                $year = date('Y');
                $month = date('m');
                $full_path[] = "hotels/{$year}/{$month}/$name_image";
                $image->storeAs("public/hotels/{$year}/{$month}",$name_image);
            }
            return response()->json($full_path);
        }

    }

    function view(Request $request)
    {
        $path = $request->get('p', '');
        $disk = $request->has('d') ? $request->get('d') : 'public';
        if ($path == '')
            return null;
        if (!Storage::disk($disk)->exists($path))
            return 'Not found';
//check file type
        $mime = ['image/gif', 'image/png', 'image/jpeg', 'image/bmp', 'image/webp'];
        $mime_check = Storage::disk($disk)->mimeType($path);
        if (!in_array($mime_check, $mime))
            return 'File format is not supported';

        $storagePath = Storage::disk($disk)->getDriver()->getAdapter()->getPathPrefix();
        $file = $storagePath . $path;

        try {
            $img = \Image::make($file);
            $width = $request->get('w');
            $height = $request->get('h');
            if ($mime_check == 'image/svg+xml') {
                $response = response()->make(Storage::disk($disk)->get($path), 200);
                $response->header("Content-Type", $mime_check);

                return $response;
            }

            if (!in_array($mime_check, $mime))
                return 'File format is not supported';
            if ($width != '') {
                if ($height == '' & $width != '') {
                    $img->resize($width, NULL, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                } elseif ($width == '' && $height != '') {
                    $img->resize(NULL, $height, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                } else {
                    $img->fit($width, $height, function ($constraint) {
                        $constraint->upsize();
                    });
                }
            }
            $qty = $request->get('q', 100);
            $type = $request->get('t');
            return $img->response($type, intval($qty));
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }



    }


}