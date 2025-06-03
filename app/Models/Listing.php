<?php

namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Description for listing one.',
                'price' => 100,
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Description for listing two.',
                'price' => 200,
            ],
            [
                'id' => 3,
                'title' => 'Listing Three',
                'description' => 'Description for listing three.',
                'price' => 300,
            ],
        ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
        return null; // Return null if no listing found
    }
}