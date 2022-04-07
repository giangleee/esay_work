<?php
namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\UserViewRepositoryInterface;

class UserViewRepository extends BaseRepository implements UserViewRepositoryInterface
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
