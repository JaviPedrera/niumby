<?php namespace App\Transformers;

class ReviewTransformer extends Transformer
{
	public function transform($review)
	{
		return [
			'publisher' => $review->publisher->name,
			'apartment_name' => $review->apartment->title,
			'comment'   => $review['comment'],
			'rating'    => $review['rating'],
			'date'		=> $review['created_at'],
		];
	}

}

