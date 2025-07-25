<?php 

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Interfaces\NumberInterface;
use Exception;

class NumberController extends Controller
{
    protected NumberInterface $repository;

    public function __construct(NumberInterface $repository)
    {
        $this->repository = $repository;
    }

    public function generate()  
    {
        try {
            $number = $this->repository->generate();
            return response()->json($number,201);
        } catch(Exception $e) {
            return response()->json(['error' => 'Failedgenerate number'], 500);
        }
    }

    public function retrieve(int $id)
    {
        try {
            $number = $this->repository->retrieve($id);
            return $number ? response()->json($number) : response()->json(['error' => 'Number not found'], 404);
        } catch(Exception $e) {
            return response()->json(['error' => 'Failed founded number'], 500);
        }
    }
}