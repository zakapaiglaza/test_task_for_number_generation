<?php

namespace App\Services;

class NumberGenerationService
{
    public function generateNumber(): int
    {
        return random_int(1, 1000);
    }
}