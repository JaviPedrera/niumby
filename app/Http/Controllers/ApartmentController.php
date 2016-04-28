<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\Session;
use App\Apartment;
use App\User;
use App\Picture;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image as Image;
use File;

class ApartmentController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('apartments.index');
	}

	public function dashboard ()
	{
		$user = Auth::user();
		$userApartments = $user->apartments()->get();

		return view('apartments.dashboard', compact('userApartments'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('apartments.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$fileExtension = Input::file('image')->getClientOriginalExtension();
		$image = Image::make(Input::file('image'));

		// $userMail = Auth::user()->mail;
		$userMail = "javipedrera@hotmail.com";
		$path = public_path() . '/images/' . $userMail . '/';
		$filePath = $path . uniqid() . "." . $fileExtension;

		$databasePath = strstr($filePath, 'images/');
		
		// Creating directory if it does not exists
		File::exists($path) or File::makeDirectory($path);

		$image->resize(null, 145, function ($constraint) { $constraint->aspectRatio(); })
			->crop(130,130)
			->save($filePath);

		$apartment = new Apartment;
		$apartment->user_id = 1;
		$apartment->title = $request->title;
		$apartment->description = $request->description;
		$apartment->price_per_day = $request->price_per_day;
		$apartment->max_persons = $request->max_persons;
		$apartment->min_nights = $request->min_nights;

		$apartment->save();
		$apartmentId = $apartment->id;

		Picture::create([
			'apartment_id' => $apartmentId,
			'route'        => $databasePath,
			'thumbnail'    => $databasePath,
		]);

		Session::flash('apartment_create', 'Congratulations, your apartment has been created succesfully');

		return redirect()->route('apartment.index');
	}

	public function getApartmentByName($apartment_name)
	{
		$apartments = Apartment::where('title', 'LIKE', '%'. $apartment_name . '%')->all();

		return $aparments;
	}
}
