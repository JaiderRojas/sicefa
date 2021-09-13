<?php

namespace Modules\Insaelements\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\People;
use App\Inventory;
use App\Element;
use Validator, Str;

class SolicitarController extends Controller
{


    public function index()
    {
        $elements=Element::all();
        $peoples=People::all();
       return view('insaelements::general.Solicitar', ['elements'=>$elements, 'peoples'=>$peoples,] );

    }



    public function ajaxPeopleByDocumentPost(Request $request)
        {
            $document=$request->document;
            $peoples = People::where('document',$document)->get();
            return response()->json(['peoples'=>$peoples]);

         }

       public function ajaxElementByCodePost(Request $request){

            $inventoryCode=$request->inventoryCode;
            $inventories = Inventory::where('inventoryCode',$inventoryCode)->get();
            return response()->json(['inventories'=>$inventories]);
         }



}
