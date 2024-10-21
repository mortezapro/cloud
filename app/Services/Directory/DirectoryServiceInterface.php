<?php
namespace App\Services\Directory;
use App\Services\Base\BaseServiceInterface;

interface DirectoryServiceInterface extends BaseServiceInterface{
    public function getParentDirectories();
    public function getDirectoryInside(int $directoryId);
}
