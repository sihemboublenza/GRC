<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoogleGraphController extends Controller
{
  function index()
$data = DB::table('opportunite')
->select(
DB::raw('id as id'),
::raw('count(*) as number'))
->groupBy('id')
->get();
$array[] = ['id', 'Number'];
foreach($data as $key => $value)
{
$array[++$key] = [$value->id, $value->number];}
return view('google_pie_chart')->with('id', json_encode($array));
}

