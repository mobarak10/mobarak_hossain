<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProblemSolveController extends Controller
{
    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function solveProblem($id): View|Factory|Application
    {
        if ($id == 1) {
            $problem_one_data = $this->solveProblemOne();
            return view('problem-one', compact('problem_one_data'));
        }
        if ($id == 2) {
            $problem_two_data = $this->solveProblemTwo();
            return view('problem-two', compact('problem_two_data'));
        }

        if ($id == 3) {
            $ip = "192.168.0.1";
            $ipv4_validation_regex = "/^(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/";
            $problem_three_data = preg_match($ipv4_validation_regex, $ip);

            return view('problem-three', compact('problem_three_data'));
        }
    }

    /*
     * solve problem number one
     */
    public function solveProblemOne(): array|int|string
    {
        $ch = curl_init('http://103.219.147.17/api/json.php');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $response = curl_exec($ch);
        curl_close($ch);

        $string  = json_decode($response)->data;
        preg_match_all("/([^,= ]+)=([^,= ]+)/", $string, $newArray);

        return $newArray;
    }

    /**
     * solve problem number two
     */
    public function solveProblemTwo(): array|int|string
    {
        $given_array = array('0'=>'z1', '1'=>'Z10', '2'=>'z12', '3'=>'Z2', '4'=>'z3');
        // get the size of array
        $count = count($given_array);

        // initialize outer for loop
        for ($i = 0; $i < $count; $i++) {
            // initialize inner for loop
            for ($j = $i + 1; $j < $count; $j++) {
                // check index value of outer array is bigger than inner array index value
                if (Str::of(strtolower($given_array[$i]))->after('z') > Str::of(strtolower($given_array[$j]))->after('z')) {
                    $temp = $given_array[$i]; // value of outer array store in temp variable
                    $given_array[$i] = $given_array[$j]; // value of inner array store in outer array index
                    $given_array[$j] = $temp; // inner array index value is replace by temp value
                }
            }
        }
        return $given_array;
    }

    /**
     * solve problem number three
     */
    public function solveProblemThree()
    {

    }
}
