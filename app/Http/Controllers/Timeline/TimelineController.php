<?php


namespace App\Http\Controllers\Timeline;


use App\Http\Controllers\Controller;
use Illuminate\Http\Client\Request;

class TimelineController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('timeline.user');
    }

    public function create(Request $request)
    {
        dd($request->all());
    }

}
