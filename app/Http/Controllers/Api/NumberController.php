<?php 

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Interfaces\NumberInterface;
use App\Http\Requests\NumberRequest;


class NumberController extends Controller
{
    protected NumberInterface $repository;

    public function __construct(NumberInterface $repository)
    {
        $this->repository = $repository;
    }

    public function generate()  
    {
        $number = $this->repository->generate();
        return response()->json($number,201);
    }

    public function retrieve(NumberRequest $request,int $id)
    {
        $number = $this->repository->retrieve($id);
        
        return $number ? response()->json($number) : response()->json(['error' => 'not found'],404);
    }
}