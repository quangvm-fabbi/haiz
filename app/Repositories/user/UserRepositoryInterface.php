<?php

namespace App\Repositories\user;
use App\Http\Requests\UserRequest;


interface UserRepositoryInterface
{
    public function uploadImage($image);
    public function store($data);
    public function edit($data, $id);
}
