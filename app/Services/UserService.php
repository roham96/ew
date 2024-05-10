<?php

namespace App\Services;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserService extends BaseService
{
    protected $repository;

    /**
     * __construct
     *
     * @param  mixed $userRepository
     * @return void
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        // dd($userRepository);
        $this->repository = $userRepository;
    }

     /**
     * Summary of user address list
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function address_list()
    {
        return $this->repository->address_list();
    }
    
}
