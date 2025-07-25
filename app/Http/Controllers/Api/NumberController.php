<?php 

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Interfaces\NumberInterface;
use App\Services\NumberGenerationService;
use Exception;

class NumberController extends Controller
{
    public function __construct(
        protected NumberInterface $repository,
        protected NumberGenerationService $service
    ) {}
    

    public function generate()
    {
        try {
            $value = $this->service->generateNumber();
            $number = $this->repository->generate($value);
            return response()->json(['id' => $number->id],201);
        } catch(Exception $e) {
            return response()->json(['error' => 'Faile dgenerate number'], 500);
        }
    }

    public function retrieve($id) 
    {
        try {
            $number = $this->repository->retrieve($id);
            return $number ? response()->json($number) : response()->json(['error' => 'Number not found'], 404);
        } catch(Exception $e) {
            return response()->json(['error' => 'Failed founded number'], 500);
        }
    }
}