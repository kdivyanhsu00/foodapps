<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foodaap;
use App\Food1;
use App\Category;
use DB;
use Datatables;


class FoodaapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function __construct(Foodaap $foodaap)
    {
        $this->foodaap = $foodaap;
    }
    public function index()
    {
        //return Foodaap::all();
        $foodaaps = Foodaap::all();
        return view('index', compact('foodaaps'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
      return view('create');
        #echo "Test";
    }
    

    function get_category(Request $r){
             $category_id =  $r->category_id ? $r->category_id :'';
            $data = Category::where('category_id',$category_id)->get()->toArray();
            echo json_encode($data);
         // echo'<pre>';print_r($data);die;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foodaap = new Foodaap;

        $foodaap->dishname = $request->dishname;
        $foodaap->category = $request->category;
        $foodaap->description = $request->description;
        $foodaap->itemtype = $request->itemtype;
        $foodaap->status = $request->status;
        $foodaap->quantity = $request->quantity;
        $foodaap->quantity_units = $request->quantity_units;
        $foodaap->finalweight = $request->finalweight;
        $foodaap->weight= $request->weight;
        $foodaap->cookingmethod= $request->cookingmethod;
        $foodaap->food_name_second= $request->food_name_second;
        $foodaap->food_ingredients= $request->food_ingredients;
        $foodaap->nutrients= $request->nutrients;

        $foodaap->save();
        echo'<pre>';print_r($request->all());
        return "saved";

        //var_dump();
        //exit();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$foodaap)
     {
          $foodaap = Foodaap::find($foodaap)->get();
          $foodaap->first();
         #die();

         return view('show')->with('foodaaps',$foodaap);
     }

   
     public function edit($id)
     {
         //
     }

   
    public function update(Request $request, $id)
     {
         
     }

 
     public function delete()
     {
               
                $foodaaps->delete();
                Session::flash('flash_message','Task successfully deleted!');
                return redirect()->route('foodaaps.index')->with('success','Food deleted successfully');
     }
     
}
