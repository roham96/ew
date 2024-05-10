<?php

namespace App\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Summary of BaseRepositoryInterface
 */
interface BaseRepositoryInterface
{
    /**
     * Summary of list
     * @return Collection
     */
    public function list(): Collection;

    /**
     * Summary of find
     * @param string $id
     * @return Model
     */
    public function find(string $id): Model;

    /**
     * Summary of create
     * @param array $data
     * @return Model|bool
     */
    public function create(array $data): Model|bool;

    /**
     * Summary of update
     * @param string $id
     * @param array $data
     * @return Model|bool
     */
    public function update(Model $model, array $data): Model|bool;

    /**
     * Summary of delete
     * @param string $id
     * @return bool
     */
    public function delete(Model $model): bool;
}
