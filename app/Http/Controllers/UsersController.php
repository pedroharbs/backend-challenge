<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Services\UsersService;
use Illuminate\Http\Request;

class UsersController extends Controller{

    private $usersService;

    public function __construct(UsersService $usersService){
        $this->usersService = $usersService;
    }

    public function getAll(){
        return $this->usersService->getAll();
    }

    public function get($id){
        return $this->usersService->get($id);
    }

    public function store(Request $request){
        return $this->usersService->store($request);
    }

    public function update($id, Request $request){
        return $this->usersService->update($id, $request);
    }

    public function destroy($id){
        return $this->usersService->destroy($id);
    }
}
