<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


trait ExceptionProduct
{
    public function apiException($request, $e) {

         if($this->isModel($e))  {

            return response()->json(['Model Not Found'],Response::HTTP_NOT_FOUND);

         }

         if($this->isHttpRequestError($e))  {

            return response()->json(['Incorrect http request'],Response::HTTP_NOT_FOUND);

         }
    }

    public function isModel($e)
    {
    	return $e instanceof ModelNotFoundException;
    }

    public function isHttpRequestError($e)
    {
    	return $e instanceof NotFoundHttpException;
    }
}