<?php

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class SolutionController
{
    // Homepage action
    public function solution($id, RouteCollection $routes)
    {
        if ($id == 1) {
            $this->solution1();
        }
        //require_once APP_ROOT . '/views/.php';
    }
    public function solution1()
    {
        $ch = curl_init('http://103.219.147.17/api/json.php');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $response = curl_exec($ch);
        curl_close($ch);
        $responseData  = json_decode($response);
        echo count($responseData);
        foreach( $responseData as $data){
            echo count($data);
        }
       // echo $response;
    }
}
