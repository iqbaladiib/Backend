<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patien;

class PatientsController extends Controller
{
    #fungsi index memunculkan semua data
    public function index(){
        #membuat variabel yang memanggil semua data
        $patients = Patien::all();
        #men cek data patien
        if ($patients){
            $resource = [
                'messagge' => 'Get All Data',
                'resource' => $patients
            ];
            #mengubah data menjadi json
            return response()->json($resource,200);
        }

        else{
            $resource = [
                'messagge' => 'Data Not Found',
                'resource' => $patients
            ];
            #mengubah data menjadi json
            return response()->json($resource,200);            
        }
    }

    public function store(Request $request){
        $input = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'adress' => 'required',
            'status' => 'required',
            'in_date_at' => 'required',
            'out_date_at' => 'required',
        ]);

        $user_input = Patien::create($input);

        $resource = [
            'message' => 'New Patirnt Has Been Added Succesfully',
            'resource'=> $user_input
        ];

        return response()->json($resource,201);
    }

    public function update(Request $request, $id){
        $patient = Patients::find($id);
        # men cek apakah data patients ada
        if($patient){
            $patient->update([
                "name" => $request->name ? $request->name : $patient->name,
                "phone" => $request->phone ? $request->phone : $patient->phone,
                "address" => $request->address ? $request->address : $patient->address,
                "status" => $request->status ? $request->status : $patient->status,
                "in_date_at" => $request->in_date_at ? $request->in_date_at : $patient->in_date_at,
                "out_date_at" => $request->out_date_at ? $request->out_date_at : $patient->out_date_at
            ]);

            $data = [
                'message' => 'Resource is update successfully',
                'data' => $patient
            ];
            # mengirim data (json) dan kode 200
            return response()->json($data, 200);
        } 
        
        else {
            $data = [
                'message' => 'Resource not found'
            ];

            return response()->json($data, 404);       
        }
    }
}

