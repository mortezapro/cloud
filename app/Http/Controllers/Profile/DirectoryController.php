<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Services\Directory\DirectoryServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DirectoryController extends Controller
{
    protected $directoryService;

    public function __construct()
    {
        $this->directoryService = App::make(DirectoryServiceInterface::class);
    }
    public function index()
    {
//        $userId = Auth::guard("user")->id();
//        $directories = $this->directoryService->get(["user_id" => $userId]);
//        return view("profile.directory.index",compact("directories"));
    }
    public function store(Request $request)
    {
        // validate directory name
        // $request->validate([],[]);
        $userId = Auth::guard("user")->id();
        $this->directoryService->save([
            "user_id" => $userId,
            "name" => $request->input("name")
        ]);
        return view("profile.directory.index",compact("directories"));
    }

    public function fileManager()
    {
        $userId = Auth::guard("user")->id();
        $directories = $this->directoryService->get(["user_id" => $userId],["*"]);
        return view("profile.file-manager.index",compact("directories"));
    }

    public function getDirectoryInside(Request $request)
    {
        // dd($request->all())
        return ["Directory1","Directory2","Directory3"];
    }
}
