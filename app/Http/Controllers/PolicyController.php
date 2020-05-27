<?php

namespace App\Http\Controllers;
use App\Policy;

use Illuminate\Http\Request;

class PolicyController extends Controller
{
  public function index()
     {
         return Policy::all();
     }

     public function show(Policy $policy)
     {

         return $policy;
     }

     public function store(Request $request)
     {
         $policy = Article::create($request->all());

         return response()->json($policy, 201);
     }

     public function update(Request $request, Policy $policy)
     {
         $policy->update($request->all());

         return response()->json($policy, 200);
     }

     public function delete(Policy $policy)
     {
         $policy->delete();

         return response()->json(null, 204);
     }
}
