<?php

namespace App\Services;
use App\Repositories\Interfaces\ItemRepositoryInterface;

class ItemService extends BaseService
{
    protected $repository;

    /**
     * __construct
     *
     * @param  mixed $itemRepository
     * @return void
     */
    public function __construct(ItemRepositoryInterface $itemRepository)
    {
        $this->repository = $itemRepository;
    }
}
