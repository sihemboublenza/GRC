<?php

namespace App\Http\Controllers;
use App\Models\Opportunite;
use Illuminate\Http\Request;
use DB;

class GoogleGraphController extends Controller
{
  function index(){

                foreach(DB::table('opportunite')->select(
                DB::raw("etape as etape"))
                DB::raw("COUNT(*) as number"), 
                ->groupBy("etape")
                ->get();
                $array[]=['Etape', 'Number'];
                foreach($data as $key => $value){
                  array[++$key]=[$value->etape , $value->number ];
                }
                return view('index')->with('etape', json_encode($array));

    }