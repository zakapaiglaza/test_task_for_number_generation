<?php 

namespace App\Interfaces;

interface NumberInterface
{
    public function generate():array;
    public function retrieve(int $id):array;
}