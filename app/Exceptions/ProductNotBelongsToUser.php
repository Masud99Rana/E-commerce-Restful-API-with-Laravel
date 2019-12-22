<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Response;

class ProductNotBelongsToUser extends Exception
{
    public function render()
    {
    	return response()->json([
    	                    'errors' => 'Product Not Belongs to User'
    	                ],Response::HTTP_OK);
    }
}
