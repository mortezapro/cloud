<?php
namespace App\Services\Base;
use Illuminate\Database\Eloquent\Model;

abstract class BaseService implements BaseServiceInterface {
    protected Model $model;
    public function get(array $condition = [],array $fields = [], int $perPage = null)
    {
        if($perPage){
            return $this->model->where($condition)->orderBy("id","desc")->paginate($perPage);
        }
        return $this->model->where($condition)->orderBy("id","desc")->get($fields);
    }

    public function find(array $condition = [], array $fields = [])
    {
        return $this->model->select($fields)->where($condition)->first();
    }

    public function store(array $data, array $condition = [])
    {
        if($condition){
            return $this->model->where($condition)->update($data);
        }
        return $this->model->create($data);
    }

    public function update(array $data, array $condition = [])
    {
        return $this->model->where($condition)->update($data);
    }

    public function destroy(array $condition = [] )
    {
        return $this->model->where($condition)->delete();
    }

    public function all()
    {
        return $this->model->orderBy("id","desc")->get();
    }
}
