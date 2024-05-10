<?php

namespace App\Services;

use App\Repositories\Interfaces\OrderRepositoryInterface;

class OrderService extends BaseService
{
    protected $repository;

    /**
     * __construct
     *
     * @param  mixed $orderRepository
     * @return void
     */
    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->repository = $orderRepository;
    }
}
