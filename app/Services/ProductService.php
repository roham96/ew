<?php

namespace App\Services;
use App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductService extends BaseService
{
    protected $repository;

    /**
     * __construct
     *
     * @param  mixed $productRepository
     * @return void
     */
    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->repository = $productRepository;
    }
}
