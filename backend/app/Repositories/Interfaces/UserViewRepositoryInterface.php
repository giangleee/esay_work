<?php
namespace App\Repositories\Interfaces;

use App\Repositories\Interfaces\RepositoryInterface;

interface UserViewRepositoryInterface extends RepositoryInterface
{
    //ví dụ: lấy 5 sản phầm đầu tiên
    public function getProduct();
}