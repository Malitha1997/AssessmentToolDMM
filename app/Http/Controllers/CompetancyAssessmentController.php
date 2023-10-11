<?php

namespace App\Http\Controllers;

use App\Models\OpIct;
use App\Models\MidIct;
use App\Models\TopIct;
use App\Models\Govofficial;
use App\Models\OpManagement;
use Illuminate\Http\Request;
use App\Models\MidManagement;
use App\Models\TopManagement;
use App\Models\OpDigitalGovernment;
use App\Models\MidDigitalGovernment;
use App\Models\TopDigitalGovernment;

class CompetancyAssessmentController extends Controller
{
    public function operational(){
        $govofficial=Govofficial::all();
        $govofficialCount=count($govofficial);
        $govofficials=Govofficial::all();
        

        $opIct=OpIct::all();
        $opDigitalGovernment=OpDigitalGovernment::all();
        $opManagement=OpManagement::all();
        $midIct=MidIct::all();
        $midDigitalGovernment=MidDigitalGovernment::all();
        $midManagement=MidManagement::all();
        $topIct=TopIct::all();
        $topDigitalGovernment=TopDigitalGovernment::all();
        $topManagement=TopManagement::all();


        if($opIct && $opDigitalGovernment && $opManagement){
            $assessmentCompletedCount=count($opIct);
        }

        $assessmentInprogress=$govofficialCount-$assessmentCompletedCount;

        if($opIct || $midIct || $topIct){
            $ictCount=count($opIct)+count($midIct)+count($topIct);
        }
        // dd($ictCount);




        if($opDigitalGovernment || $midDigitalGovernment || $topDigitalGovernment){
            $digitalGovernmentCount=count($opDigitalGovernment)+count($midDigitalGovernment)+count($topDigitalGovernment);
        }


        $opIctCount=count($opIct);

        return view('admin.CompetancyAssessment.OperationalLayer.dashboard',compact('govofficials','digitalGovernmentCount','ictCount','opIctCount','assessmentInprogress','govofficialCount','assessmentCompletedCount'));
    }
}
