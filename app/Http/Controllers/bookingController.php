<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use App\Booking;


class bookingController extends Controller
{
   public function __construct(){
    $this->booking = new Booking;
   }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $bookingLists=$this->booking->getAllDetails();
        return view('dashboard.bookingList')->with('bookingDetails',$bookingLists);
     }
     public function add (){
        $inputData=Input::all();
        if(isset($inputData)){
            $this->booking->add($inputData);
            return view('home.thankYou');
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
