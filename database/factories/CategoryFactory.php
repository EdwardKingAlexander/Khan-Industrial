<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'category_name' => $faker->randomElement($array = array(
            'Absorbants', 
'Uncategorized', 
'Safety-and-Security', 
'Adhesives,-Sealants-and-Tapes', 
'Abrasives', 
'Pneumatics', 
'Janitorial-Equipment', 
'Fasteners,-Clamps-and-Straps', 
'Electrical-and-Lighting', 
'Chemicals', 
'Lubricants-and-Paint', 
'Power-Tools', 
'Welding-Supplies', 
'HVAC', 
'Material-Handling', 
'Oilfield', 
'Foodservice-Supplies', 
'Hand-Tools', 
'Pumps', 
'Measuring-and-Leveling-Tools', 
'Plumbing-Equipment', 
'MRO-Supplies', 
'Office-Supplies', 
'Marking-Tools', 
'Electrical-Tools', 
'Display-Units'
        )),
        'description' => $faker->sentence
    ];
});
