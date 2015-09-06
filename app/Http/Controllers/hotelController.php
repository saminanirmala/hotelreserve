<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Image;
use App\Hotels;

class hotelController extends Controller
{
    
   public function __construct(){
    $this->hotels = new Hotels;
   }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $hotels=$this->hotels->getHotels();
        return view('dashboard.hotelList')->with('hotelLists',$hotels);
    }
       public function add()
    {
        $inputData=Input::all();
        if(empty($inputData)){
         return view('dashboard.addHotels');
        }
        elseif(isset($inputData)){
            $image=$inputData['image'];
            $originalName = $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
            $originalImageName = strtotime(date('Ymdhis')) . "-main-" . $originalName;
            $thumbImageName = strtotime(date('Ymdhis')) . "-thumb-" . $originalName;
            Image::make($image)->save('uploads/hotels/originalImage/'. $originalImageName);
            Image::make($image)->resize(300,364)->save('uploads/hotels/thumbnailImage/' . $thumbImageName);
            $hotelsData['title']=$inputData['title'];
            $hotelsData['price']=$inputData['price'];
            $hotelsData['description']=$inputData['description'];
            $hotelsData['roomNo']=$inputData['roomNo'];
            $hotelsData['order']=$inputData['order'];
            $hotelsData['fullImage'] = $originalImageName;
            $hotelsData['thumbImage'] = $thumbImageName;
            $hotelsData['type']=$inputData['type'];
            $hotelsData['bookedDate']=date('Y-m-d H:i:s');
            $this->hotels->add($hotelsData);
            return view('dashboard.addHotels');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
