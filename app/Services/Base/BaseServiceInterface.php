<?php
namespace App\Services\Base;
interface BaseServiceInterface{
    public function get( array $condition = [],array $fields = [], int $perPage = null );
    public function find( array $condition = [],array $fields = [] );
    public function store( array $data,array $condition=[] );
    public function update( array $data, array $condition = [] );
    public function destroy( array $condition = [] );
}
