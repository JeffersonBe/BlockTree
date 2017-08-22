<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlockChainController extends Controller
{
    public function store(Request $request) {
      $inputs = $request->all();
      $location = $request->input('location');
      $company = $request->input('company');
      $type = $request->input('typeOfWood');

      $request = Request::create('http://localhost:3001/mineBlock', 'GET');

      $data = ['data' => "$location, $company, $type"];

      $headers = [
        'Content-Type: application/json'
      ];

      $ch = curl_init();

      // curl -H "Content-type:application/json" --data '{"data" : "Name:Jessica, Job:BA"}' http://localhost:3001/mineBlock

      curl_setopt($ch, CURLOPT_URL, "http://localhost:3001/mineBlock");
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
      // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

      $results = curl_exec($ch);
      curl_close($ch);

      echo $results;

      return view('receive');
    }
}
