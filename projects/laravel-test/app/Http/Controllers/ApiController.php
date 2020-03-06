<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use DB;
 
class ApiController extends Controller
{
    public function index()
    {
        // the logic of your page will be here
        $query = "
            SELECT *
            FROM `movies`
            WHERE 1
            ORDER BY `rating` DESC
            LIMIT 10
        ";

        $movies = DB::select($query);

        return $movies; // insted of writting header(JSON..... )

        // var_dump($movies); die();
        //     |
        //     V
        // dd($movies);

        // as response we will return an array of data
    //     return [
    //         'success' => true,
    //         'message' => 'Response successfully returned.',
    //         'errors' => [],
    //         'data' => []
    //     ];
    }
}