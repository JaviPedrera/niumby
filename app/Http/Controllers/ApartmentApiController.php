<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Response;
use App\Apartment;
use App\Transformers\ApartmentTransformer;

class ApartmentApiController extends Controller
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
		$apartments = Apartment::all()->toArray();
		$apartments = $this->apartmentTransformer->transformCollection($apartments);

		return Response::json([
			'data' => $apartments
		], 200);
	}

	public function show($id)
	{
		$apartment = Apartment::find($id);

		if ( ! $apartment) {
			return Response::json([
				'error' => [
					'message' => 'Apartment does not exist'
				]
			], 404);
		}

		return Response::json([
			'data' => $this->transform($apartment)
		], 200);
	}

}
