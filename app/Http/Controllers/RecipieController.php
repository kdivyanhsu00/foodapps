<?php

namespace App\Http\Controllers;
use App\Recipie;
use App\Foodaap;
use Illuminate\Http\Request;

class RecipieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Foodaap $foodaap, Recipie $recipie)
    {
        $this->foodaap = $foodaap;
        $this->recipie = $recipie;
    }
    public function index()
    {
        //return Foodaap::all();
        $foodaaps = Foodaap::all();
        return view('index', compact('foodaaps'));
    }
    public function getdata()
    {
        $recipies =  Recipie::select('group','recipiename','quantity');
        return Datatables::of($recipies)->make(true);
        //$recipies =  Recipie::all();
        //return recipie;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $recipie = new Recipie;
         
        $recipie->recipiename = $request->recipiename;
        $recipie->group = $request->group;
        $recipie->quantity = $request->quantity;
        $recipie->quantity_unit = $request->quantity_unit;
        $recipie->Energy = $request->Energy;
        $recipie->Fat = $request->Fat;
        $recipie->Fat_1 = $request->Fat_1;

        $recipie->Carbohydrate = $request->Carbohydrate;
        $recipie->protein = $request->protein;
        $recipie->cholesterol = $request->cholesterol;
        $recipie->fiber = $request->fiber;
        $recipie->sodium = $request->sodium;
        $recipie->water = $request->water;
        $recipie->vitaminA = $request->vitaminA;
        $recipie->vitaminB6 = $request->vitaminB6;
        $recipie->lactose = $request->lactose;
        $recipie->alochol = $request->alochol;
        $recipie->caffine = $request->caffine;
        $recipie->sugar = $request->sugar;
        $recipie->calcium = $request->calcium;
        $recipie->iron = $request->iron;
        $recipie->copper = $request->copper;
        $recipie->floride = $request->floride;
        $recipie->vitaminB12 = $request->vitaminB12;
        $recipie->vitaminC = $request->vitaminC;
        $recipie->vitaminD = $request->vitaminD;

        

        $recipie->save();
        echo'<pre>';print_r($request->all());
        return "saved";

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function get_recipie(Request $r){
        //$data = Recipie::first()->toArray();
       // echo $r->search;die;
        $data = Recipie::Where('recipiename', 'LIKE', '%' . $r->search . '%')->get();
        $response['flag']       =   true;
        $response['recipie']    =   $data;
        return response()->json($response);
    }
}
