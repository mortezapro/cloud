<?php
namespace App\Services\Directory;
use App\Models\DirectoryModel;
use App\Services\Base\BaseService;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class DirectoryService extends BaseService implements DirectoryServiceInterface{
    public function __construct()
    {
        $this->model = App::make(DirectoryModel::class);
    }
    public function makeBaseDirectory()
    {
        $baseDirectoryName = Str::random(4).substr(time(),6,4).Auth::guard("user")->id();
        File::makeDirectory(storage_path('app/private/').$baseDirectoryName, 0775);
    }
}
