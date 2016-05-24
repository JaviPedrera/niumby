<?php namespace App\Transformers;

class ApartmentTransformer extends Transformer
{
	public function transform($apartment)
	{
		return [
			'title' => $apartment['title']
		];
	}
}


 ?>