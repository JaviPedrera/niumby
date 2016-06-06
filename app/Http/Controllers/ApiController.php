<?php 
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Response;
use App\Http\Controllers\AuthenticateController;

class ApiController extends BaseController {

	protected $statusCode = 200;
	protected $authentizer;

	public function __construct(AuthenticateController $authentizer) {
		$this->authentizer = $authentizer;
	}

	public function getStatusCode()
	{
		return $this->statusCode;
	}

	public function setStatusCode($statusCode)
	{
		$this->statusCode = $statusCode;

		return $this;
	}

	public function respond($data, $headers = [])
	{
		return Response::json($data, $this->getStatusCode(), $headers);
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

	public function respondNotFound($message = 'Not found')
	{
		return $this->setStatusCode(404)->respondWithError($message);
	}

	public function respondInternalError($message = 'Internal Error')
	{
		return $this->setStatusCode(500)->respondWithError($message);
	}

	public function respondSuccess($message) 
	{
		return $this->setStatusCode(200)->respond([
			'message' => $message,
			'status_code' => $this->getStatusCode(),
		]);
	}

	public function respondWithPaginator($modelPaginated, $modelTransformed, $limit)
	{
		return Response::json([
			'status_code' => 200,
			'data' => $modelTransformed,
			'paginator' => [
				'total_count' => $modelPaginated->total(),
				'total_pages' => ceil($modelPaginated->total() / $limit),
				'current_page' => $modelPaginated->currentPage(),
				'limit' => $limit,
			]
		]);
	}

	
}

 ?>