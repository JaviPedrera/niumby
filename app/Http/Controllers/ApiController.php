<?php 
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Response;

class ApiController extends BaseController {
	
	protected $statusCode = 200;

	public function getStatusCode()
	{
		return $this->statusCode;
	}

	public function setStatusCode($statusCode)
	{
		$this->statusCode = $statusCode;

		return $this;
	}

	public function respondNotFound($message = 'Not found')
	{
		return $this->setStatusCode(404)->respondWithError($message);
	}

	public function respondInternalError($message = 'Internal Error')
	{
		return $this->setStatusCode(500)->respondWithError($message);
	}

	public function respond($data, $headers = [])
	{
		return Response::json($data, $this->getStatusCode(), $headers);
	}

	public function respondWithPaginator($modelPaginated, $modelTransformed, $limit, $statusCode = 200)
	{
		return Response::json([
			'data' => $modelTransformed,
			'paginator' => [
				'total_count' => $modelPaginated->total(),
				'total_pages' => ceil($modelPaginated->total() / $limit),
				'current_page' => $modelPaginated->currentPage(),
				'limit' => $limit,
			]
		]);
	}

	public function respondWithError($message)
	{
		return $this->respond([
			'error' => [
				'message' => $message,
				'status_code' => $this->getStatusCode(),
			]
		]);
	}
}

 ?>