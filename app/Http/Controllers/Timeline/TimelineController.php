<?php


namespace App\Http\Controllers\Timeline;


use App\Http\Controllers\Controller;
use App\Services\User\UserService;
use Illuminate\Http\Client\Request;

class TimelineController extends Controller
{

    private $userService;

    /**
     * TimelineController constructor.
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $users = $this->userService
            ->getAllPatients();
        return view('timeline.user')->with(['users' => $users]);
    }

    public function create(Request $request)
    {
        dd($request->all());
    }

}
