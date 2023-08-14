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



    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('guest')->except('logout');

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
                return redirect()->route('home');
            }else{
                return redirect()->route('userHome');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Username And Password Are Wrong.');
        }
    }

    // public function login2(Request $request): RedirectResponse
    // {
    //     $input = $request->all();
    //     $this->validate($request, [
    //         'username' => 'required',
    //         'password' => 'required',
    //     ]);


    //     if(auth()->attempt(array('username' => $input['username'], 'password' => $input['password'])))
    //     {
    //         if (auth()->user()->type == 'admin') {
    //             return redirect()->route('home');
    //         }else if (auth()->user()->type == 'manager') {
    //             return redirect()->route('home');
    //         }else{
    //             return redirect()->route('home');
    //         }
    //     }else{
    //         return redirect()->route('login')
    //             ->with('error','Username And Password Are Wrong.');
    //     }
    // }

    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('home');
    }

}
