<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobList;

class jobListController extends Controller
{
  public function index(){
    $list = JobList::all();
    return view('list.index', ['list' => $list]);
  }

  public function show($id){
    $list = JobList::find($id);
    return view('list.show', ['list' => $list]);

  }

  public function create(){

  }

  public function store(Request $request){

  }

  public function edit($id){

  }

  public function update(Request $request, $id){

  }

  public function delete($id){
    
  }
}
