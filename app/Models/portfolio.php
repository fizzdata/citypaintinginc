<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    use HasFactory;

    public static function index(){
        $portfolios = [

             [
                'inside_img' => '201.webp',
                'outside_img' => '201.jpg',
                'text1' => '201 E 74th St, New York, NY 10021',
                'text2' => 'Taping, Painting, Kadex, Epoxy Paint, & Wallcovering',
                'slide' => 'slideInLeft',

            ],
             [
                'inside_img' => '953.png',
                'outside_img' => '953.jpg',
                'text1' => '953 Dean St, Brooklyn, NY 11238',
                'text2' => 'Taping, Painting, Kadex, Epoxy Paint, Clay Works, & Wallcovering',
                'slide' => 'slideInDown',

            ],
            [
                'inside_img' => '827.jpg',
                'outside_img' => '827.jpg',
                'text1' => '827 Sterling Pl, Brooklyn, NY 11216',
                'text2' => 'Taping, Painting, Kadex, Epoxy Paint, & Wallcovering',
                'slide' => 'slideInLeft',
            ],
            [
                'inside_img' => '286.png',
                'outside_img' => '286.jpg',
                'text1' => '286 Rider Ave, Bronx, NY 10451',
                'text2' => 'Painting, and wallcovering',
                'slide' => 'slideInLeft',
            ],

            [
                'inside_img' => '322.jpg',
                'outside_img' => '322.jpg',
                'text1' => '322 Grand Concourse, Bronx, NY 10451',
                'text2' => 'Taping, Kedex, Primer, Panting, Wallpaper, Epoxy Painting',
                'slide' => 'slideInUp',

            ],

            [
                'inside_img' => '130.jpg',
                'outside_img' => '130.jpg',
                'text1' => '130 Hope St, Brooklyn, NY 11211',
                'text2' => 'Taping, Kedex, Primer, Panting, Wallpaper, Epoxy Painting',
                'slide' => 'slideInRight',
            ],
                          

            [
                'inside_img' => '540.jpg',
                'outside_img' => '540.jpg',
                'text1' => '540 Waverly Ave, Brooklyn, NY 11238',
                'text2' => 'Taping, Kedex, Primer, Panting, Wallpaper, Epoxy Painting',
                'slide' => 'slideInUp',

            ],

            [
                'inside_img' => '210.jpg',
                'outside_img' => '210.jpg',
                'text1' => '210 Clarkson Ave Brooklyn, NY 11226',
                'text2' => 'Taping, Kedex, Primer, Panting, Wallpaper, Epoxy Painting',
                'slide' => 'slideInLeft',

            ],

            [
                'inside_img' => '219.webp',
                'outside_img' => '219.jpg',
                'text1' => '219 Hudson Street, New York, NY, 10013',
                'text2' => 'Taping, Kedex, Primer, Panting, Wallpaper, Epoxy Painting',
                'slide' => 'slideInRight',

            ],

            [
                'inside_img' => '237.jpg',
                'outside_img' => '237.jpg',
                'text1' => '237 mcGuinness blvd brooklyn ny 11222',
                'text2' => ' Taping, Painting',
                'slide' => 'slideInDown',

            ],

            [
                'inside_img' => '10.jpg',
                'outside_img' => '10.jpg',
                'text1' => '10 MONTIETH STREET BROOKLYN, NY 11206',
                'text2' => 'Taping, Kedex, Primer, Panting, Wallpaper, Epoxy Painting',
                'slide' => 'slideInDown',

            ],

            [
                'inside_img' => '1000.jpg',
                'outside_img' => '1000.jpg',
                'text1' => '1000 Westchester Ave Bronx, NY 10459',
                'text2' => 'Panting, Epoxy Painting',
                'slide' => 'slideInLeft',

            ],

            [
                'inside_img' => '44-01.jpg',
                'outside_img' => '44-01.jpg',
                'text1' => '44-01 Northern Blvd Long Island City, NY 11101',
                'text2' => 'Painting, Epoxy Paint, Venetian Plaster, & Wallcovering',
                'slide' => 'slideInLeft',

            ]



        ];

        return $portfolios;
    }
}
