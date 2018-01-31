<?php

namespace App\Repositories;

use Illuminate\Http\Request;

interface PostInterface
{
    public function all();
    public function add(Request $request);
    public function remove(Request $request);
    public function find(Request $request);
    public function update(Request $request);
}
