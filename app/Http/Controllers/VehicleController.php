<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Vehicle;
use App\Models\Fuel;
use App\Models\Tyre;
use App\Models\Trip;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;



class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

//for captcha
public function reloadCaptcha() {
  return response()->json(['captcha' => captcha_img()]);
}

//from here trip

public function triphome()
    {
        return view('trips.home');
    }

public function traddData(Request $req)
{ 
  $trip = new Trip;
  $trip->date=$req->date;
  $trip->source=$req->source;
  $trip->destination=$req->destination;
  $trip->distance=$req->distance;
  $trip->tareweight=$req->tareweight;
  $trip->netweight=$req->netweight;
  $trip->grossweight=$req->grossweight;
  $trip->driver_id=$req->driver_id;
  $trip->vehicle_id=$req->vehicle_id;
 
  $trip->save();
  return redirect('tripview');

 
}

public function trshow()
{
   $data= Trip::all();
    return view('trips.view',['trviews' =>$data]);
}
public function trdelete($id)
{
    $data=Trip::find($id);
    $data->delete();

    return redirect('tripview');
                    
}

public function trshowupdate($id)
{
    $data=Trip::find($id);
    return view('trips.update',['trdata'=>$data]);
}

public function trupdate(Request $request)
{
  $data=Trip::find($request->id);
  $data->date=$request->date;
  $data->source=$request->source;
  $data->destination=$request->destination;
  $data->distance=$request->distance;
  $data->tareweight=$request->tareweight;
  $data->netweight=$request->netweight;
  $data->grossweight=$request->grossweight;
  $data->driver_id=$request->driver_id;
  $data->vehicle_id=$request->vehicle_id;
 
  $data->save();
  return redirect('tripview');
}

//end trip


   //from here tyre

   public function tyrehome()
    {
        return view('tyres.home');
    } 

   public function taddData(Request $req)
   {
     $tyre = new Tyre;
     $tyre->srn=$req->srn;
     $tyre->tyreno=$req->tyreno;
     $tyre->model=$req->model;
     $tyre->status=$req->status;
     $tyre->condition=$req->condition;
     $tyre->type=$req->type;
     $tyre->amount=$req->amount;
     $tyre->vehicle_id=$req->vehicle_id;
    
     $tyre->save();
     return redirect('tyreview');
   }

   public function tshow()
   {
      $data= Tyre::all();
       return view('tyres.view',['tviews' =>$data]);
   }
   public function tdelete($id)
   {
       $data=Tyre::find($id);
       $data->delete();
   
       return redirect('tyreview');
                       
   }

   public function tshowupdate($id)
   {
       $data=Tyre::find($id);
       return view('tyres.update',['tdata'=>$data]);
   }

   public function tupdate(Request $request)
   {
     $data=Tyre::find($request->id);
     $data->srn=$request->srn;
     $data->tyreno=$request->tyreno;
     $data->model=$request->model;
     $data->status=$request->status;
     $data->condition=$request->condition;
     $data->type=$request->type;
     $data->amount=$request->amount;
     $data->vehicle_id=$request->vehicle_id;
    
     $data->save();
     return redirect('tyreview');
   }
     

    //end tyre

    //from here fuel

    public function fuelhome()
    {
        return view('fuels.home');
    }
    public function faddData(Request $req)
    {
      $fuel = new Fuel;
      $fuel->filled_at=$req->filled_at;
      $fuel->quantity=$req->quantity;
      $fuel->amount=$req->amount;
      $fuel->vehicle_id=$req->vehicle_id;
     
      $fuel->save();
      return redirect('fuelview');
    }

    public function fshow()
    {
       $data= Fuel::all();
        return view('fuels.view',['fviews' =>$data]);
    }
    public function fdelete($id)
    {
        $data=Fuel::find($id);
        $data->delete();
    
        return redirect('fuelview');
                        
    }

    public function fshowupdate($id)
    {
        $data=Fuel::find($id);
        return view('fuels.update',['fdata'=>$data]);
    }

    public function fupdate(Request $request)
    {
      $data=Fuel::find($request->id);
      $data->filled_at=$request->filled_at;
      $data->quantity=$request->quantity;
      $data->amount=$request->amount;
      $data->vehicle_id=$request->vehicle_id;
     
      $data->save();
      return redirect('fuelview');
    }
   
    // end fuel

    //from here vehicle

    public function vehiclehome()
    {
        return view('vehicles.home');
    }

    public function addData(Request $req)
    {
      $vehicle = new Vehicle;
      $vehicle->rtonumber=$req->rtonumber;
      $vehicle->type=$req->type;
      $vehicle->model=$req->model;
      $vehicle->fueltype=$req->fueltype;
     
      $vehicle->save();
      return redirect('vehicleview');
    }

    public function show()
    {
       $data= Vehicle::all();
        return view('vehicles.view',['views' =>$data]);
    }
   
    public function delete($id)
    {
        $data=Vehicle::find($id);
        $data->delete();
    
        return redirect('vehicleview');
                        
    }

    public function showupdate($id)
    {
        $data=Vehicle::find($id);
        return view('vehicles.update',['data'=>$data]);
    }

    public function update(Request $request)
    {
      $data=Vehicle::find($request->id);
      $data->rtonumber=$request->rtonumber;
      $data->type=$request->type;
      $data->model=$request->model;
      $data->fueltype=$request->fueltype;
     
      $data->save();
      return redirect('vehicleview');
    }

    //end vehicle

    //from here driver
 
       public function driverhome()
    {
        return view('drivers.home');
    }

    public function daddData(Request $req)
    {
      $driver = new Driver;
      $driver->name=$req->name;
      $driver->dob=$req->dob;
      $driver->address=$req->address;
      $driver->gender=$req->gender;
      $driver->age=$req->age;
      $driver->mobile_number=$req->mobile_number;
      $driver->save();
      return redirect('driverview');
    }

    public function dshow()
    {
       $data= Driver::all();
        return view('drivers.view',['dviews' =>$data]);
    }
   
    public function ddelete($id)
    {
        $data=Driver::find($id);
        $data->delete();
    
        return redirect('driverview');
                        
    }

    public function dshowupdate($id)
    {
        $data=Driver::find($id);
        return view('drivers.update',['ddata'=>$data]);
    }

    public function dupdate(Request $request)
    {
      $data=Driver::find($request->id);
      $data->name=$request->name;
      $data->dob=$request->dob;
      $data->address=$request->address;
      $data->gender=$request->gender;
      $data->age=$request->age;
      $data->mobile_number=$request->mobile_number;
      $data->save();
      return redirect('driverview');
    }

    //end driver

    public function aboutus()
    {
     
        return view('aboutus');
    }

    public function generatePDF()
    {
        $pdf = PDF::loadView('aboutus');    
        return $pdf->download('aboutus.pdf');
    }


  
}
