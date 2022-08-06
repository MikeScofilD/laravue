<?php

namespace App\Http\Controllers;

class PersonController extends Controller
{
    public function __invoke()
    {
        $persons = [
            [
                'id' => 1,
                'name' => "Vasya",
                'age' => 18,
                'job' => "coach",
            ],
            [
                'id' => 2,
                'name' => "Lena",
                'age' => 21,
                'job' => "no job",
            ],
            [
                'id' => 3,
                'name' => "Petr",
                'age' => 13,
                'job' => "singer",
            ],
            [
                'id' => 4,
                'name' => "Kolya",
                'age' => 44,
                'job' => "seller",
            ],
        ];
        return $persons;
    }
}
