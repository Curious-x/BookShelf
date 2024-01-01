<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Job 1',
                'description' => 'This is a job 1 description'
            ],
            [
                'id' => 2,
                'title' => 'Job 2',
                'description' => 'This is a job 2 description'
            ],
            [
                'id' => 3,
                'title' => 'Job 3',
                'description' => 'This is a job 3 description'
            ]
        ];
    }

    public static function find($id)
    {
        return collect(self::all())->firstWhere('id', $id);
    }
}