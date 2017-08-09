<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class WorkerController extends Controller
{
    public function index(){
        try {
	    	$workers = DB::select('CALL sp_getWorkers();');
	    	DB::commit();

            return response() -> json([
                    "msg" => "success",
                    "workers" => $workers// -> toArray()
                ],200
            );

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public function getWorker(){
    	// $resultado = DB::statement("call sp_new")
    	// $workers = DB::select('CALL sp_getWorkers();');
    	// DB::commit();
    	// return $workers;
    }
    public function store(){
        //
    }
    public function update(){
        //
    }
    public function destroy(){
        //
    }
}
