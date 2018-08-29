<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 29.08.2018
 * Time: 23:08
 */

namespace App\Http\Controllers;


class TestController
{
//    public function index(){
//        function factorial($x) {
//            if ($x === 0) return 1;
//            else return $x*factorial($x-1);
//        }
//        echo factorial(4);
//    }

public function index(){
    $shop = [
      ['category_name' => 'Books',
        'children'=>[
            'category_name' => 'Comic book',
            'children' => [
                ['category_name' => 'Marvel Comic Book'],
                ['category_name' => 'DC Comic Book'],
                ['category_name' => 'Action comics'],
            ],
        ],
      ],
    ];
    echo '<pre>';
    var_dump($shop);
    echo '</pre>';
}

}