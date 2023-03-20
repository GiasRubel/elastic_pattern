<?php

namespace App\Http\Controllers\Recursion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecursionController extends Controller
{
    public function index()
    {
        $animals = '{"animals":[
              {"name":"apes","parent":"mammals","link":"//animals.com/mammals/apes"},
              {"name":"fishes","parent":"animals","link":"//animals.com/fishes"},
              {"name":"animals","parent":"kingdom","link":"//animals.com"},
              {"name":"mammals","parent":"animals","link":"//animals.com/mammals"},
              {"name":"marsupials","parent":"mammals","link":"//animals.com/mammals/marsupials"},
              {"name":"opossums","parent":"marsupials","link":"//animals.com/mammals/marsupials/opossums"},
              {"name":"big apes","parent":"apes","link":"//animals.com/mammals/big-apes"},
              {"name":"birds","parent":"animals","link":"//animals.com/birds"},
              {"name":"cats","parent":"mammals","link":"//animals.com/mammals/cats"},
              {"name":"big cats","parent":"cats","link":"//animals.com/mammals/cats/big-cats"},
              {"name":"domestic cats","parent":"cats","link":"//animals.com/mammals/cats/domestic-cats"},
              {"name":"persian cats","parent":"domestic cats","link":"//animals.com/mammals/cats/domestic-cats/persian-cats"},
              {"name":"chimpanzee","parent":"big apes","link":"//animals.com/mammals/big-apes/chimpanzee"}
            ]}';

        $animalsArray = json_decode($animals, true);
        //return $animalsArray['animals'];
        $rootName = 'kingdom';
         $tree = $this->makeTree($animalsArray['animals'], $rootName);
        $nav  = $this->makeNav($tree[$rootName]);

        echo $nav;

    }

    public function makeTree($array = [], $branch = "")
    {
        $tree = [];
        foreach ($array as $item) {
            //  echo '<pre>', print_r($item["parent"], 1), '</pre>';
            if ($item["parent"] == $branch) {
                $item["children"] = $this->makeTree($array, $item["name"]);
                $tree[$branch][] = $item;
            }
            //echo print_r($item["parent"]);
        }
        return $tree;
        // echo '<pre>', print_r($tree, 1), '</pre>';
    }

    // build the multilevel HTML
    function makeNav($arr = [])

    {
        $nav = '<ul>';

        foreach ($arr as $key => $val) {
            if ($val["children"] && count($val["children"]) > 0) {
                $nav .= '<li>';
                $nav .= "<a href=".
                    $val['link'].">".$val['name']."</a>";
      $nav .= '<ul>';
      foreach ($val["children"] as $item) {
          $nav .= $this->makeNav($item);
      }
      $nav .= '</ul>';
      $nav .= '</li>';
    } else {
                $nav .= '<li>';
                $nav .= "<a href=".
                    $val['link'].">".$val['name']. "</a>";
      $nav .= '</li>';
    }
        }
        $nav .= '</ul>';

        return $nav;
    }
}
