<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
use App\User;
use App\booking;

use Illuminate\Support\Facades\Config;
class SiteController extends Controller {
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        // parent::__construct();
    }

    /**
     * Admin dashboard
     *
     * @return Response
     */
    public function index(Request $request) {
         if(is_null($request->session()->get('user')) || empty($request->session()->get('user'))){
            return view('login');
         }
         else {
            return view('dashboard');
         }
            // header("Location: http://webscifi.dev/dashboard");            
        // }
        
//         $this->page['title'] = 'Dashboard';
//         $app_start_date = date('m/d/Y', Config::get('admin.app_start_date'));

//         if(Config::get('admin.app_end_date') > time()){
//             $app_end_date = date('m/d/Y');
//         } else {
//             $app_end_date = date('m/d/Y', Config::get('admin.app_end_date'));
//         }

//         $startDate = $request->input('start-date', $app_start_date);
//         $endDate = $request->input('end-date', $app_end_date);

//         $startDate = date_create_from_format('m/d/Y', $startDate);
//         $endDate = date_create_from_format('m/d/Y', $endDate);
// //		$endDate->add(new \DateInterval('P1D'));

//         // ANALYTICS FROM GOOGLE
//         $this->gaModel = new GaModel(Config::get('admin.ga_profile_id'));
//         // Line Chart of Daily Visitors
//         $options = array('chartId' => 'visitors', 'width' => '960');

//         $start_date = $startDate->getTimeStamp();
//         $end_date = $endDate->getTimeStamp();

//         $this->db_analytics($start_date, $end_date);

//         $visitors = new LineChart($this->gaModel->dailyVisits($start_date, $end_date), $options, $start_date, $end_date);

//         // Basic Stats from Google Analytics
//         $basic = new Stats($this->gaModel->basicStats($start_date, $end_date));

//         $colors = array('#5B5C77', '#D9D676', '#90D669', '#8EAC4F', '#C98956', '#1C82D8');

//         // Pie Charts
//         $options_mobile = array('width' => 280, 'height' => 180, 'chartId' => 'mobile_pie_chart', 'colors' => $colors);
//         $options_browsers = array('width' => 280, 'height' => 180, 'chartId' => 'browser_pie_chart', 'colors' => $colors);
//         $options_mediums = array('width' => 280, 'height' => 180, 'chartId' => 'medium_pie_chart', 'colors' => $colors);
//         $options_channels = array('width' => 280, 'height' => 180, 'chartId' => 'channel_pie_chart', 'colors' => $colors);
//         $mobile = new PieChart($this->gaModel->mobileVisitors($start_date, $end_date, 5), $options_mobile);
//         $browsers = new PieChart($this->gaModel->getVisitorsByBrowsers($start_date, $end_date, 5), $options_browsers);
//         $mediums = new PieChart($this->gaModel->getVisitorsByMedium($start_date, $end_date, 5), $options_mediums);
//         $channels = new PieChart($this->gaModel->getVisitorsByChannel($start_date, $end_date, 5), $options_channels);

//         // Default Country State Maps
//         $states = new StateMap($this->gaModel->getVisitorsFromCountry(Config::get('admin.dash_country_filter'), $start_date, $end_date));
//         $countries = new WorldMap($this->gaModel->getVisitorsByCountry($start_date, $end_date));
//         $gaEvents = $this->gaModel->getEvents($start_date, $end_date);
// //        $fbShares = isset($gaEvents['share']['share facebook']['Main Share FB']) ? $gaEvents['share']['share facebook']['Main Share FB'] : 0;
// //        $twShares = isset($gaEvents['share']['share twitter']['Main Share TW']) ? $gaEvents['share']['share twitter']['Main Share TW'] : 0;
// //        $emailShares = isset($gaEvents['share']['share email']['Email Share']) ? $gaEvents['share']['share email']['Email Share'] : 0;
//         //echo '<pre>'; print_r($gaEvents); die;

// //        $this->db_analytics($start_date, $end_date);

//         return view('admin.dashboard.index', [
//             'filters'			=> [
//                 'start-date'	=> $request->input('start-date', $app_start_date),
//                 'end-date'		=> $request->input('end-date', $app_end_date) // Use Request Data since we actually add 1 to end date since we're checking for less than
//             ],
//             'visitors' => $visitors,
//             'basic' => $basic,
//             'mobile' => $mobile,
//             'mediums' => $mediums,
//             'channels' => $channels,
//             'browsers' => $browsers,
//             'states' => $states,
//             'countries' => $countries,
// //            'fbShares' => $fbShares,
// //            'twShares' => $twShares,
// //            'emailShares' => $emailShares,
//             'page' => $this->page
//         ]);
    }

    public function login(Request $request) {
        $inputs = $request->all();
        // dd(\Hash::make($inputs['txtPassword']), $inputs['txtPassword']);
        $enquiry = User::where('email', $inputs['txtEmail'])->first();
        $this->ajax_response['data'] = $inputs;
        // $this->ajax_response['message'] = 'Success';
        // return $$this->ajax_response;
        if($enquiry){
            $this->ajax_response['message'] = 'success';
            $request->session()->put('user', $inputs['txtEmail']);
        } else {
            $this->ajax_response['message'] = 'failed';
        }
        return $this->ajax_response;
    }

    public function badminton(Request $request) {
        if(is_null($request->session()->get('user')) || empty($request->session()->get('user'))){
            header("Location: http://webscifi.dev/"); /* Redirect browser */
            exit();
        }
        $mytime = \Carbon\Carbon::now();
        $mytimeplustwo = \Carbon\Carbon::now()->addDays(2);
        $booking['datas'] = \DB::table('booking')->select('booking.no_of_people', 'booking.slot_start_time', 'booking.slot_end_time', 'booking.status', 'booking.activity_id', 'activities.name', 'activities.max_capacity', 'activities.start', 'activities.end', 'activities.slot_length')->join('activities','booking.activity_id', '=', 'activities.id')->whereDate('booking.slot_start_time', '>', $mytime)->whereDate('booking.slot_end_time', '<', $mytimeplustwo)->wherein('booking.activity_id', [1,2,3])->get();
        // $booking = booking::whereDate('slot_start_time', '>', $mytime)->whereDate('slot_end_time', '<', $mytimeplustwo)->wherein('activity_id', [1,2,3])->get();
        //$booking['slotsCount'] = (($booking['datas'][0]->end - $booking['datas'][0]->start )/$booking['datas'][0]->slot_length*60);
        // dd($booking['datas'][0]->end->diffInDays($booking['datas'][0]->start));
        $booking['count'] = sizeof($booking['datas']);
        // dd($booking['datas']);
        return view('booking', $booking);
    }

    public function book(Request $request) {
        $inputs = $request->all();
        $user = $request->session()->get('user');
        $user = user::where('email', $user)->first();
        $date = $inputs['datepicker'];
        $time = $inputs['txtTime'];
        $fromtimestamp = date('Y-m-d H:i:s', strtotime("$date $time"));
        $totimestamp = strtotime($fromtimestamp) + (60*30);
        $totimestamp = date('Y-m-d H:i:s', $totimestamp);
        // dd($fromtimestamp, $totimestamp);
        // dd($user['id'], $inputs);
        $booking = new booking();
        $booking->user_id = $user['id'];
        $booking->activity_id = $inputs['txtCourt'];
        $booking->no_of_people = $inputs['txtNumber'];
        $booking->slot_start_time = $fromtimestamp;
        $booking->slot_end_time = $totimestamp;
        $booking->save();
        
        return $this->ajax_response['message'] = 'success';
    }

    public function dashboard(Request $request) {
        if(is_null($request->session()->get('user')) || empty($request->session()->get('user'))){
            header("Location: http://webscifi.dev/"); /* Redirect browser */
            exit();
        }
        return view('dashboard');
    }

    public function cancel(Request $request) {
        if(is_null($request->session()->get('user')) || empty($request->session()->get('user'))){
            header("Location: http://webscifi.dev/"); /* Redirect browser */
            exit();
        }
        $user = $request->session()->get('user');
        $user = user::where('email', $user)->first();
        $mytime = \Carbon\Carbon::now();
        $mybooking['datas'] = \DB::table('booking')->select('booking.id', 'booking.slot_start_time', 'booking.slot_end_time', 'activities.name')->join('activities','booking.activity_id', '=', 'activities.id')->where('booking.user_id', $user['id'])->where('booking.delete', 0)->whereDate('booking.slot_start_time', '>', $mytime)->orderBy('booking.slot_start_time', 'ASC')->get();
        // dd($mybooking);

        return view('cancel', $mybooking);
    }

    public function logout(Request $request) {
        if(!is_null($request->session()->get('user')) || !empty($request->session()->get('user'))){
            $request->session()->forget('user');
        }
        return redirect ("/#"); /* Redirect browser */
    }

    public function delete(Request $request) {
         $inputs = $request->all();
         \DB::table('booking')
            ->where('id', $inputs['id'])
            ->update(['delete' => 1]);

         return $this->ajax_response['message'] = 'success';

    }

    private function db_analytics($start_date, $end_date){
        $start_time = date('Y-m-d 00:00:00', $start_date);
        $end_time = date('Y-m-d 23:59:59', $end_date);
//        dd($this->data['unique_entries']);
    }
}
