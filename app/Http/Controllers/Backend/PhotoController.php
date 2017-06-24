<?php

namespace App\Http\Controllers\Backend;

use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;

class PhotoController extends Controller
{
    public function destroy(Photo $photo) {
        File::delete($photo->profileImage);
        $photo->delete();
        return 'success';
    }
}
