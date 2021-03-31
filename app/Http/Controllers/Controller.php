<?php

namespace App\Http\Controllers;

//use Intervention\Image\Facades\Image;
use Image;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function upload($avatar)
    {
        $avataName ='public/images/'. $avatar->getClientOriginalExtension();
        Image::make($avatar)->save(public_path() . $avataName);

        return $avataName;
    }
}
