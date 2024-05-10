<?php

namespace App\Services;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryService extends BaseService
{
    protected $repository;

    /**
     * __construct
     *
     * @param  mixed $categoryRepository
     * @return void
     */
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->repository = $categoryRepository;
    }

    /**
     * main
     *
     * @return void
     */
    public function main()
    {
        return $this->repository->main();
    }
}
