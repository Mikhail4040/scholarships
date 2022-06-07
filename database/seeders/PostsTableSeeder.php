<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = ["A1", "A2", "B1", "B2", "C1","C2"];
        $array2 = ["German", "English", "Arabic", "Russian", "Spanish","French","Portuguese","Chinese"];
        $array3 = 
    [
        "Computer Science Scholarship", 
        "natural sciences scholarship", 
        "Law Scholarship", 
        "Civil Engineering Scholarship", 
        "Architecture Scholarship",
        "Psychology Scholarship",
        "Horticulture Science Scholarship",
        "Forestry Scholarship",
        "Natural Resources Management Scholarship",
        "Art Scholarship",
        "Small Business Management Scholarship",
        "Health & Physical Education/Fitness Scholarship",
        "Industrial Engineering Scholarship",
        "Electrical, Electronics Engineering Technologies Scholarship",
        "Pharmacy  Engineering Scholarship",

    ];

    $array4 = 
    [
        "Technical College System of Georgia", 
        "University of Nuevo León", 
        "Sapienza University of Rome", 
        "University of Toronto", 
        "Complutense University of Madrid",
        "Anadolu University",
        "National Open University of Nigeria",
        "Ain Shams University",
        "University of Hagen",
        "Sapienza University of Rome",
        "University of Buenos Aires",
        "Universitas Terbuka",
        "California State University system",
        "National Technological Institute of Mexico",
        "Estácio de Sá University",
    ];
        Post::create([
            'name'=>Arr::random($array3),
            'description'=>Str::random(100),
            'university_name'=> Arr::random($array4),
            'study_language'=> Arr::random($array2),
            'language_level'=>Arr::random($array),
            'duration'=> "https://en.wikipedia.org/wiki/List_of_largest_universities_and_university_networks_by_enrollment",
            'user_id'=>rand(1,2),
            'slug'=> Str::random(12),
        ]);
      
    }
}
