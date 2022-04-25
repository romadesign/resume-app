<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreResume;
use App\Models\Resume;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\File;

class ResumeController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function create()
	{
		$resume = json_encode(Resume::factory()->make());
		return view('resumes.create', compact('resume'));
	}

	private function savePicture($blob){
        $img = Image::make($blob);
        $fileName = Str::uuid() . '.' . explode('/', $img->mime())[1];
        $filePath = '/storage/pictures/' . $fileName;
        $img->save(public_path($filePath));

        return $filePath;
    }

	public function store(StoreResume $request) {
        $data = $request->validated();
        $picture = $data['content']['basics']['picture'];
        if ($picture !== '/storage/pictures/default.png') {
            return response($this->savePicture($picture));
        }

        return response('no hay imagen');
    }
}
