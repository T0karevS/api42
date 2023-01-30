<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DeskListResource;
use App\Models\DeskList;
use App\Http\Requests\DeskListStoreRequest;
use http\Env\Response;
use Illuminate\Http\Request;

class DeskListcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DeskListResource::collection(deskList::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DeskListStoreRequest $request)
    {
        $created_deskList = DeskList::create($request->validated());
        return new DeskListResource($created_deskList);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(DeskList $deskList)
    {
        return new DeskListResource($deskList);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(DeskListStoreRequest $request, DeskList $deskList)
    {
        $deskList->update($request->validated());
        return new DeskListResource($deskList);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DeskList  $deskList
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeskList $deskList)
    {
        $deskList->delete();
        return response(null, \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
