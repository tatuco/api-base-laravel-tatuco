<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 23/07/18
 * Time: 04:05 PM
 */

namespace App\Core;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class TatucoController extends BaseController
{

    public $service;
    protected $validateStore = [];
    protected $validateUpdate = [];
    protected $validateDefault = [];
    protected $select = ['*'];

    public function __construct($service){
        $this->service = $service;
    }

    public function test(Request $request)
    {
        return $this->service->test($request);
    }

    public function index(Request $request)
    {
       /* if(!$request->is('*?where'))
        {
            $request->where = [];
        }*/
      // $request->
        return $this->service->index($request);
    }

    public function show($id)
    {
        return $this->service->show($id);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), array_merge($this->validateStore, $this->validateDefault));
        if ($validator->fails()) {
            return response()->json([
                $validator->getMessageBag(),
            ], 422);
        }
        return $this->service->store($request);
    }


    public function update($id,Request $request)
    {
        $validator = Validator::make($request->all(), array_merge($this->validateUpdate, $this->validateDefault));
        if ($validator->fails()) {
            return response()->json([
                $validator->getMessageBag(),
            ], 422);
        }
        return $this->service->update($id, $request);
    }

    public function destroy($id, Request $request)
    {
        return $this->service->destroy($id, $request);
    }

    public function select(Request $request)
    {
        if (!$request->has('where')) {
            $where = [
                ["op" => "eq", "field" => "deleted", "value" => "false"],
                ["op" => "gte", "field" => "created_at", "value" => Carbon::today()->format('Y-m-d')]
            ];
            $request->merge(['where' => $where]);
        }

        $request->merge([
            "select" => $this->select
        ]);
        return $this->service->select($request, $this->select);
    }
}
