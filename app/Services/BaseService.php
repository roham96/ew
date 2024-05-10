<?php

namespace App\Services;
use App\Repositories\Interfaces\BaseRepositoryInterface;

class BaseService
{
    protected $repository;

    /**
     * __construct
     *
     * @param  mixed $baseRepository
     * @return void
     */
    public function __construct(BaseRepositoryInterface $baseRepository)
    {
        $this->repository = $baseRepository;
    }

    /**
     * list
     *
     * @return void
     */
    public function list()
    {
        return $this->repository->list();
    }

    /**
     * get
     *
     * @param  mixed $id
     * @return void
     */
    public function get($id)
    {
        return $this->repository->find($id);
    }

    /**
     * create
     *
     * @param  mixed $data
     * @return void
     */
    public function create($data)
    {
        return $this->repository->create($data);
    }
    /**
     * update
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return void
     */
    public function update($id, $data)
    {
        return $this->repository->update($id, $data);
    }

    /**
     * delete
     *
     * @param  mixed $id
     * @return void
     */
    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}
