<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Collection;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    protected $model;

    /**
     * __construct
     *
     * @param  mixed $model
     * @return void
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }
}
