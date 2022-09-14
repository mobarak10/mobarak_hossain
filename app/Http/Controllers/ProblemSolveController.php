<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

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
}
