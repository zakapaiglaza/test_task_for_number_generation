<?php 

namespace App\Repositories;

use App\Models\Number;
use App\Interfaces\NumberInterface;

class NumberRepository implements NumberInterface
{   
    public function generate(int $value): Number
    {
        return Number::create(['number' => $value]); 
    }

    public function retrieve(int $id): ?Number
    {
        return Number::find($id);
    }
}