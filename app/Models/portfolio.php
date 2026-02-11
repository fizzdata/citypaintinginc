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
                'folder_name' => '74-201-east',
                'inside_images' => array_map('basename', glob(public_path('images/portfolio/74-201-east') . '/*')),
                'outside_img' => 'outside.jpg',
                'text1' => '201 E 74th St, New York, NY 10021',
                'text2' => 'Taping, Painting, Kadex, Epoxy Paint, & Wallcovering',
                'slide' => 'slideInLeft',

            ],
             [
                'folder_name' => '953-dean-st',
                'inside_images' => array_map('basename', glob(public_path('images/portfolio/953-dean-st') . '/*')),
                'outside_img' => 'outside.jpg',
                'text1' => '953 Dean St, Brooklyn, NY 11238',
                'text2' => 'Taping, Painting, Kadex, Epoxy Paint, Clay Works, & Wallcovering',
                'slide' => 'slideInDown',

            ],
            [
                'folder_name' => '827-sterling-pl',
                'inside_images' => array_map('basename', glob(public_path('images/portfolio/827-sterling-pl') . '/*')),
                'outside_img' => 'outside.jpg',
                'text1' => '827 Sterling Pl, Brooklyn, NY 11216',
                'text2' => 'Taping, Painting, Kadex, Epoxy Paint, & Wallcovering',
                'slide' => 'slideInLeft',
            ],
            [
                'folder_name' => '286-rider-ave',
                'inside_images' => array_map('basename', glob(public_path('images/portfolio/286-rider-ave') . '/*')),
                'outside_img' => 'outside.jpg',
                'text1' => '286 Rider Ave, Bronx, NY 10451',
                'text2' => 'Painting, and wallcovering',
                'slide' => 'slideInLeft',
            ],

            [
                'folder_name' => '322-grand-concourse',
                'inside_images' => array_map('basename', glob(public_path('images/portfolio/322-grand-concourse') . '/*')),
                'outside_img' => 'outside.jpg',
                'text1' => '322 Grand Concourse, Bronx, NY 10451',
                'text2' => 'Taping, Kedex, Primer, Panting, Wallpaper, Epoxy Painting',
                'slide' => 'slideInUp',

            ],

            [
                'folder_name' => '130-hope-st',
                'inside_images' => array_map('basename', glob(public_path('images/portfolio/130-hope-st') . '/*')),
                'outside_img' => 'outside.jpg',
                'text1' => '130 Hope St, Brooklyn, NY 11211',
                'text2' => 'Taping, Kedex, Primer, Panting, Wallpaper, Epoxy Painting',
                'slide' => 'slideInRight',
            ],
                          

            [
                'folder_name' => '540-waverly-ave',
                'inside_images' => array_map('basename', glob(public_path('images/portfolio/540-waverly-ave') . '/*')),
                'outside_img' => 'outside.jpg',
                'text1' => '540 Waverly Ave, Brooklyn, NY 11238',
                'text2' => 'Taping, Kedex, Primer, Panting, Wallpaper, Epoxy Painting',
                'slide' => 'slideInUp',

            ],

            [
                'folder_name' => '210-clarkson-ave',
                'inside_images' => array_map('basename', glob(public_path('images/portfolio/210-clarkson-ave') . '/*')),
                'outside_img' => 'outside.jpg',
                'text1' => '210 Clarkson Ave Brooklyn, NY 11226',
                'text2' => 'Taping, Kedex, Primer, Panting, Wallpaper, Epoxy Painting',
                'slide' => 'slideInLeft',

            ],

            [
                'folder_name' => '219-hudson-street',
                'inside_images' => array_map('basename', glob(public_path('images/portfolio/219-hudson-street') . '/*')),
                'outside_img' => 'outside.jpg',
                'text1' => '219 Hudson Street, New York, NY, 10013',
                'text2' => 'Taping, Kedex, Primer, Panting, Wallpaper, Epoxy Painting',
                'slide' => 'slideInRight',

            ],

            [
                'folder_name' => '237-mcguinness-blvd',
                'inside_images' => array_map('basename', glob(public_path('images/portfolio/237-mcguinness-blvd') . '/*')),
                'outside_img' => 'outside.jpg',
                'text1' => '237 mcGuinness blvd brooklyn ny 11222',
                'text2' => ' Taping, Painting',
                'slide' => 'slideInDown',

            ],

            [
                'folder_name' => '10-montieth-street',
                'inside_images' => array_map('basename', glob(public_path('images/portfolio/10-montieth-street') . '/*')),
                'outside_img' => 'outside.jpg',
                'text1' => '10 MONTIETH STREET BROOKLYN, NY 11206',
                'text2' => 'Taping, Kedex, Primer, Panting, Wallpaper, Epoxy Painting',
                'slide' => 'slideInDown',

            ],

            [
                'folder_name' => '1000-westchester-ave',
                'inside_images' => array_map('basename', glob(public_path('images/portfolio/1000-westchester-ave') . '/*')),
                'outside_img' => 'outside.jpg',
                'text1' => '1000 Westchester Ave Bronx, NY 10459',
                'text2' => 'Panting, Epoxy Painting',
                'slide' => 'slideInLeft',

            ],

            [
                'folder_name' => '44-01-northern-blvd',
                'inside_images' => array_map('basename', glob(public_path('images/portfolio/44-01-northern-blvd') . '/*')),
                'outside_img' => 'outside.jpg',
                'text1' => '44-01 Northern Blvd Long Island City, NY 11101',
                'text2' => 'Painting, Epoxy Paint, Venetian Plaster, & Wallcovering',
                'slide' => 'slideInLeft',

            ]



        ];

        return $portfolios;
    }
}
