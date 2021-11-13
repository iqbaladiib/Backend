<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public $animals=[
        ["nama" => "kucing"],
        ["nama" => "ayam"],
        ["nama" => "ikan"]
    ];

    //menampilkan seluruh data
    public function index(){
        foreach($this->animals as $animal) {
            echo "Nama hewan : $animal[nama] <br>";
        }
    }

    //menambahkan data
    public function store(Request $request){
        array_push($this->animals, $request);
        $this->index();
    }

    //mengupdate data
    public function update(Request $request, $id){
        $this->animals[$id] = $request;
        $this->index()
    }

    //menghapus data
    public function destroy($id){
        unset($this->animals[$id]);
        $this->index();
    }
}
