<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Response;

class ResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responses = Response::all();
        return response()->json($responses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = new Response();
        $response->name = $request->input('title');
        $response->thread_id = $request->input('thread_id');
        $response->message = $request->input('message');
        $response->posted_at = now();
        $response->ip_addr = null; //ipアドレスの取得方法決めたら実装
        $response->save();
        return response()->json(Response::all());
    }
}
