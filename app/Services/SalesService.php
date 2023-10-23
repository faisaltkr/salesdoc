<?php
namespace App\Services;

use App\Models\Leads;
use App\Models\Relation;
use App\Models\Sales;
use Illuminate\Database\Eloquent\Model;

class SalesService {

 
    public function store($request)
    {
        $data=false;
        /**
         * if the requested parameter is lead id
         */
        if($request->has('lead_id'))
        {
            $data = Leads::whereId($request->lead_id)->first()->toArray();
        }
        /**
         * if the requested parameter is relation id
         */
        if($request->has('relation_id'))
        {
            $data = Relation::whereId($request->relation_id)->first()->toArray();
        }
        if($data)
        {
            $storeArray = Sales::create($data);
            return $storeArray;
        }
        return false;
    }

}