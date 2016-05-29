<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Input;
use Response;
use App\Review;
use App\Transformers\ReviewTransformer;

class ReviewApiController extends ApiController
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
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $limit = Input::get('limit');
        $reviews = Review::paginate($limit);

        $reviewsTransformed = $this->reviewTransformer->transformCollection($reviews->all());

        return $this->respondWithPaginator($reviews, $reviewsTransformed, $limit);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd('asdf');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($identifier)
    {
        $review = Review::find($identifier);

        if ( ! $review) {
            return $this->respondNotFound();
        }

        return Response::json([
            'data' => $this->reviewTransformer->transform($review)
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
