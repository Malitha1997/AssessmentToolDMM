<?php



namespace App\Http\Controllers;



use Illuminate\View\View;

use App\Models\Percentage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {
        $this->middleware('auth');
    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function index(): View
    {
        $dataExists = Auth::user()->govorganizationdetail->percentage;
        $technologyDataExists = Auth::user()->govorganizationdetail->technology;
        $customerDataExists = Auth::user()->govorganizationdetail->customer;
        $operationDataExists = Auth::user()->govorganizationdetail->operation;
        $strategyDataExists = Auth::user()->govorganizationdetail->strategy;
        $cultureDataExists = Auth::user()->govorganizationdetail->culture;
        return view('home',compact('dataExists','technologyDataExists','customerDataExists','operationDataExists','strategyDataExists','cultureDataExists'));
    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function adminHome(): View
    {
        return view('adminHome');
    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function managerHome(): View
    {
        return view('managerHome');
    }

    public function userHome(): View
    {
        return view('userHome');
    }

    public function landingHome(): View
    {
        return view('landing');
    }
}
