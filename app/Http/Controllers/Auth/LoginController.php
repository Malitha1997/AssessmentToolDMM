<?php



namespace App\Http\Controllers\Auth;



use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Govorganizationdetail;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;



class LoginController extends Controller

{

    /*

    |--------------------------------------------------------------------------

    | Login Controller

    |--------------------------------------------------------------------------

    |

    | This controller handles authenticating users for the application and

    | redirecting them to your home screen. The controller uses a trait

    | to conveniently provide its functionality to your applications.

    |

    */



    use AuthenticatesUsers;



    /**

     * Where to redirect users after login.

     *

     * @var string

     */

     protected $redirectTo = '/home';

     //protected $redirectTo2 = '/home2';

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('guest')->except('logout');
        //$this->middleware('guest')->except('logout2');

    }



    /**

     * Create a new controller instance.

     *

     * @return RedirectResponse

     */

    public function login(Request $request): RedirectResponse
    {
        $input = $request->all();

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('username' => $input['username'], 'password' => $input['password'])))
        {
            if (auth()->user()->type == 'admin') {
                return redirect()->route('home');
            }else if (auth()->user()->type == 'manager') {
                return redirect()->route('manager.home');
            }else{
                return redirect()->route('userHome');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Username And Password Are Wrong.');
        }
    }

    public function login2(Request $request): RedirectResponse
    {
        $input = $request->all();
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);


        if(auth()->attempt(array('username' => $input['username'], 'password' => $input['password'])))
        {
            if (auth()->user()->type == 'manager') {
                return redirect()->route('manager.home');
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login2')
                ->with('error','Username And Password Are Wrong.');
        }
    }

    public function logout(){
        Auth::logout();
        Session::flush();

        // $type=Auth::user()->type;

        // if ($type == '0') {
        //     return redirect()->route('home');
        // }else if($type == '1'){
        //     return redirect()->route('home');
        // }else if($type == '2'){
        //     return redirect()->route('login2');
        // }

        return redirect()->route('home');

    }

    public function logout2(){
        Auth::logout2();
        Session::flush();
        return redirect()->route('home2');
    }

    public function logingovofficial(){
        return view('auth.login2');
    }

}
