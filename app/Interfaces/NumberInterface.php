<?php 

namespace App\Interfaces;

use App\Models\Number;

interface NumberInterface
{
    public function generate(int $value): Number;
    public function retrieve(int $id): ?Number;
}
