<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDetentionRequest;
use App\Models\Detention;
use App\Models\Event;
use App\Query\QueryBuilder;
use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\DetentionService;

class DetentionController extends TatucoController
{
    protected $validateStore = [
        'id' => 'required|string',
        'name' => 'required|string|max:20',
        'description' => 'string',
        'type_id' => 'required|integer',
        'event_name' => 'required|string|min:5',
       // 'event_description' => 'string',
        'event_date' => 'required|date_format:Y-m-d|after_or_equal:today',
        'event_responsable' => 'required'
       // 'event_id' => 'required|integer'
    ];

    protected $select = [
        'id',
        'name'
    ];


    public function __construct()
    {
        parent::__construct(new DetentionService());
    }

    public function store(Request $request)
    {
        return parent::store($request); // TODO: Change the autogenerated stub
    }

    public function clasifications(Request $request)
    {
        return $this->service->clasifications($request); // TODO: Change the autogenerated stub
    }
    /*
        public function list(Request $request) {
            return QueryBuilder::for(Detention::class)
                ->select('detentions.id', 'detentions.name')
                ->where('detentions.deleted', false)
                ->orderBy("detentions.created_at", "desc")
                ->get();
        }*/
}
