<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalesRequest;
use App\Models\Leads;
use App\Models\Sales;
use Illuminate\Http\Request;
use App\Services\SalesService;
use Illuminate\Database\Eloquent\Model;

class SalesController extends Controller
{

    private $SalesService;
    /**
     * initializing sales service.
     */
    public function __construct(SalesService $service)
    {
        $this->SalesService = $service;
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       try {
        /**
         * Injecting request to sale service class and getting response
         */
        $response = $this->SalesService->store($request);
        if($response)
        {
            return response()->json([
                'success' => 'Row inserted successfully',
                'data' => $response
            ],200);
        }
        return response()->json([
            'success' => false,
            'message' => 'Bad Request'
        ],400);
        
       } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ],500);
       }
    }
}
