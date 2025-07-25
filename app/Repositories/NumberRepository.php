<?php 

namespace App\Repositories;

use App\Models\Number;
use App\Interfaces\NumberInterface;
use App\Services\NumberGenerationService;


class NumberRepository implements NumberInterface
{   
    protected $numberGenerationService;

    public function __construct(NumberGenerationService $numberGeneratorService) {
        $this->numberGenerationService = $numberGeneratorService;
    }

    public function generate(): array
    {
        $number = $this->numberGenerationService->generateNumber();
        $setNumber = Number::create(['number' => $number]);

        return [
            'id' => $setNumber->id,
            'number' => $setNumber->number,
            'created_at' => $setNumber->created_at,
        ];  
    }

    public function retrieve(int $id): ?Number
    {
        return Number::find($id);
    }
}