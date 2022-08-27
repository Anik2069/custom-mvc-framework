<?php

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouteCollection;

class SolutionController
{
    // Homepage action
    public function solution($id, RouteCollection $routes)
    {
        if ($id == 1) {
            $this->solution1();
        }
        if ($id == 2) {
            $this->solution2();
        }
        if ($id == 3) {
            require_once APP_ROOT . '/views/ip_form.php';
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
        $arr = json_decode($response, true);
        $response_arr = explode(',', $arr['data']); //print_r($exploded_arr); 
        $speed_arr = [];
        foreach ($response_arr as $k => $value) {
            if ($k % 2 != 0) {
                $exploded_arr =  explode("speed=", $value);
                if (isset($exploded_arr[1])) {
                    if ($exploded_arr[1] > 60)
                        $speed_arr[] = $exploded_arr[1];
                }
            }
        }


        echo "Total: " . count($speed_arr) . " Total count of the speeds those crossed 60<br>";
        echo "List : <br>";
        foreach ($speed_arr as $key => $speed) {
            echo "$speed <br>";
        }
    }
    public function solution2()
    {
        $ques_arr = array('0' => 'z1', '1' => 'Z10', '2' => 'z12', '3' => 'Z2', '4' => 'z3');
        echo "Given Array: ";
        print_r($ques_arr);
        echo "<br />Output Array: ";
        asort($ques_arr, SORT_NATURAL | SORT_FLAG_CASE);
        print_r($ques_arr);
    }
    public function solution3()
    {

        $ip =  $_POST['ip'];
        $check_ind =  preg_match('/^(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)(?:[.](?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)){3}$/', $ip);
        if ($check_ind == 1) {
            echo ("$ip is a valid IP address");
        } else {
            echo ("$ip is not a valid IP address");
        }
        // echo '<br>';
        // if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
        //     echo ("$ip is a valid IP address");
        // } else {
        //     echo ("$ip is not a valid IP address");
        // }
    }
}
