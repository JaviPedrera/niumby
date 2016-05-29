<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Input;
use Response;
use App\Apartment;
use App\Transformers\ApartmentTransformer;

class ApartmentApiController extends ApiController
{
	/**
	 * @var App\Transformers\ApartmentTransformer
	 */
	protected $apartmentTransformer;
	
	/**
	 * ApartmentTransformer injection in order to transform the given info
	 * @param ApartmentTransformer $apartmentTransformer
	 */
	public function __construct(ApartmentTransformer $apartmentTransformer)
	{
		$this->apartmentTransformer = $apartmentTransformer;
	}

	public function index() 
	{
		$limit = Input::get('limit') ? : 10 ;
		$apartments = Apartment::paginate($limit);
		$apartmentsTransformed = $this->apartmentTransformer->transformCollection($apartments->all());

		return $this->respondWithPaginator($apartments, $apartmentsTransformed, $limit);
	}

	public function show($identifer)
	{
		if (is_numeric($identifer)) {
			$apartment = Apartment::find($identifer);
		} else {
			$apartment = Apartment::where('title', 'LIKE', '%'. $identifer .'%')->first();
		}

		if ( ! $apartment) {
			return $this->respondNotFound();
		}

		return Response::json([
			'data' => $this->apartmentTransformer->transform($apartment)
		], 200);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
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
	}
}