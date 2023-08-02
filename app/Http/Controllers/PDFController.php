<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PDFController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

     public function cultureChart()
     {//

         $culture = Auth::user()->govorganizationdetail->culture;

         // If there is no culture data for the user, you can handle it accordingly
         if (!$culture) {
             // Handle the case where the authenticated user doesn't have a related "culture"
             return redirect()->route('home')->with('error', 'No culture data found.');
         }

         // Organize the culture data for Google Charts
         $result = [
             ['Category', 'Value'],
             ['Leadership', (int) $culture->leadership],
             ['Standards', (int) $culture->standards],
             ['Employee Engagement', (int) $culture->employee_engagement],
             ['Level of Skill', (int) $culture->level_of_skill],
             ['Talent Management', (int) $culture->talent_management],
         ];

         $pdf = PDF::loadView('myPDF', compact('result'));
         return $pdf->download('report.pdf');


     }

}
