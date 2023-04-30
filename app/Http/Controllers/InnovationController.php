<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Innovations;

class InnovationController extends Controller
{
    //function to generate data according to the cricked innovation
    //function to load and populate the data to the view

   

    protected $innovationChecked;
    protected $dataFetched;
    

    protected function checkInnovation($innovationClicked){
        switch($innovationClicked){
            case 'AcademicERP':
                $this->innovationChecked = 1;
                break;

            case 'WaterIncidentMS':
                $this->innovationChecked = 0;
                break;

            case 'BarcodeAccessControl':
                $this->innovationChecked = 2;
                break;

            case 'CargoManagementSystem':
                $this->innovationChecked = 3;
                break;

            default:
            $this->innovationChecked = 0;

            break;
        }

        
    }

    protected function populateView($innovationClicked){
        $data = Innovations::dataSet();
        $this->checkInnovation($innovationClicked);

        $this->dataFetched = $data[$this->innovationChecked];
      
         
        return view('singleInnovation', ['allData' => $this->dataFetched]);
    }
}
