<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\Interfaces\BaseRepositoryInterface;
use Illuminate\Support\Collection;

/**
 * Summary of BaseRepository
 */
abstract class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Summary of list
     * @return Collection
     */
    public function list(): Collection
    {
        return $this->model->all();
    }

    /**
     * Summary of find
     * @param string $id
     * @return Model
     */
    public function find(string $id): Model
    {
        return $this->model->find($id);
    }

    /**
     * Summary of create
     * @param array $data
     * @return Model|bool
     */
    public function create(array $data): Model|bool
    {
        $data['user_id'] = auth()->user()->id;
        $m = $this->model->create($data);
        return $this->model->find($m->id);
    }

    /**
     * Summary of update
     * @param string $id
     * @param array $data
     * @return Model|bool
     */
    public function update(Model $model, array $data): Model|bool
    {
        return $model->update($data);
    }

    /**
     * Summary of delete
     * @param Model $model
     * @return bool
     */
    public function delete(Model $model): bool
    {
        return $model->delete();
    }
}