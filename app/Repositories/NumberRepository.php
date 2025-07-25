<?php 

namespace App\Repositories;

use App\Models\Number;
use App\Interfaces\NumberInterface;

class NumberRepository implements NumberInterface
{   
    public function generate():array
    {
        $setNumber = Number::create(['number' => random_int(1,1000)]);

        return [
            'id' => $setNumber->id,
            'number' => $setNumber->number,
            'created_at' => $setNumber->created_at
        ];
    }

    public function retrieve(int $id):array
    {
        $getNumber = Number::find($id);

        return $getNumber = [
            'id' => $getNumber->id,
            'number' => $getNumber->number,
            'created_at' => $getNumber->created_at
        ];
    }
}