<?php

namespace App\Models;

class Job
{
    public static function  all (): array
    {
        return [

            [
                'id' => '1',
                'title' => 'Teacher',
                'salary' => '40,000$'],
            [
                'id' => '2',
                'title' => 'Software engineer',
                'salary' => '90,000$'
            ],
            [
                'id' => '3',
                'title' => 'Farmer',
                'salary' => '70,000$'
            ]
        ];
    }
}
