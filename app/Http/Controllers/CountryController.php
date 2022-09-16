<?php

namespace App\Http\Controllers;
use App\Models\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CountryController extends Controller
{
   public function index(){
    // return view('country');
    $countries = auth()->user()->countries()->paginate(5);
    return view('countries.index', ['countries'=> $countries]);
   }

    public function show(Country $country){
    return view('country', ['country'=> $country]);
}

   public function create(){
    // return view ('countries.create');
    $this->authorize('create', Post::class);
        return view('countries.create');
   }

   public function store(){
    $this->authorize('create', Post::class);
    $inputs = request()->validate([
        'name'=>'required',
        'ISO'=>'required',
    ]);
    auth()->user()->countries()->create($inputs);
    session()->flash('country-created-message', 'Country with name was created '. $inputs['name']);
    return redirect()->route('country.index');
    // return back();
   }

    public function edit(Country $country){
    $this->authorize('view', $country);
    return view('countries.edit', ['country'=> $country]);
    }

    public function destroy(Country $country ,Request $request){
    $this->authorize('delete', $country);
    $country->delete();
    $request->session()->flash('message', 'Country was deleted');
    return back();
    }

    public function update(Country $country){
    $inputs = request()->validate([
        'name'=> 'required',
        'ISO'=> 'required'
    ]);

    $country->name = $inputs['name'];
    $country->ISO = $inputs['ISO'];
    $this->authorize('update', $country);
    $country->save();
    session()->flash('country-updated-message', 'Country with name was updated '. $inputs['name']);
    return redirect()->route('country.index');
    }
}
