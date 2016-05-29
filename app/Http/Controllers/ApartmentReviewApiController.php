<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Response;
use App\Review;
use App\Apartment;
use App\Transformers\ApartmentTransformer;
use App\Transformers\ReviewTransformer;

class ApartmentReviewController extends ApiController
{
	/**
	 * @var App\Transformers\ReviewTransformer
	 */
	protected $reviewTransformer;
	
	/**
	 * ReviewTransformer injection in order to transform the given info
	 * @param ReviewTransformer $reviewTransformer
	 */
	public function __construct(ReviewTransformer $reviewTransformer)
	{
	    $this->reviewTransformer = $reviewTransformer;
	}

    public function index($identifier)
    {
    	$apartment = Apartment::find($identifier);
    	if ( ! $apartment) {
    		return $this->respondNotFound('Apartment not found');
    	}
    	$reviews = $apartment->reviews->all();
    	$reviews = $this->reviewTransformer->transformCollection($reviews);

    	return Response::json([
    		'data' => $reviews
    	], 200);
    }
}
