<?php
namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        // return \App\Models\Product::class;
    }

    public function getProduct()
    {
        // return $this->model->select('product_name')->take(5)->get();
    }
}
