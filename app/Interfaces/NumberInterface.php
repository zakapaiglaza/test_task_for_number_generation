<?php 

namespace App\Interfaces;

use App\Models\Number;

interface NumberInterface
{
    public function generate(): array;
    public function retrieve(int $id): ?Number;
}
