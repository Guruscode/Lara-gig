<?php 
     namespace App\Models;

     class Listing {
          public static function all() {
              return [
               [
                    'id' => 1,
                    'title' => 'Listing one',
                    'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat,
                     ea incidunt, ullam, ipsa earum quia impedit facere est voluptatibus fugit quod a officiis
                      accusamus laudantium cumque sint velit veniam quidem!'
                ],
                [
                    'id' => 2,
                    'title' => 'Listing Two',
                    'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat,
                     ea incidunt, ullam, ipsa earum quia impedit facere est voluptatibus fugit quod a officiis
                      accusamus laudantium cumque sint velit veniam quidem!'
                ]
              ];
          }

          public static function find($id) {
                 $listings = self::all();

                 foreach($listings as $listing) {
                    if($listing['id'] == $id) {
                              return $listing;
                    }
                 }
          }
     }
