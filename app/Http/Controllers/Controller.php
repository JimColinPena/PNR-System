<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller as BaseController;
use Carbon\Carbon;
use DateTime;
use DateInterval;
use Redirect;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $todayDate = Carbon::now()->format('Y-m-d');
        $todayTime = Carbon::now()->format('H:i A');
        $station = DB::Table('stations');
        return View::make('welcome',compact('todayDate', 'todayTime','station'));
    }

    public function depart(Request $request)
    {
    	$station1 = Carbon::now()->format('H:i A');

    	$minutes_to_add2 = 8;
		$time2 = new DateTime();
		$time2->add(new DateInterval('PT' . $minutes_to_add2 . 'M'));
		$station2 = $time2->format('H:i A');

		$minutes_to_add3 = 17;
		$time3 = new DateTime();
		$time3->add(new DateInterval('PT' . $minutes_to_add3 . 'M'));
		$station3 = $time3->format('H:i A');

		$minutes_to_add4 = 22;
		$time4 = new DateTime();
		$time4->add(new DateInterval('PT' . $minutes_to_add4 . 'M'));
		$station4 = $time4->format('H:i A');

		$minutes_to_add5 = 26;
		$time5 = new DateTime();
		$time5->add(new DateInterval('PT' . $minutes_to_add5 . 'M'));
		$station5 = $time5->format('H:i A');

		$minutes_to_add6 = 31;
		$time6 = new DateTime();
		$time6->add(new DateInterval('PT' . $minutes_to_add6 . 'M'));
		$station6 = $time6->format('H:i A');

		$minutes_to_add7 = 34;
		$time7 = new DateTime();
		$time7->add(new DateInterval('PT' . $minutes_to_add7 . 'M'));
		$station7 = $time7->format('H:i A');

		$minutes_to_add8 = 37;
		$time8 = new DateTime();
		$time8->add(new DateInterval('PT' . $minutes_to_add8 . 'M'));
		$station8 = $time8->format('H:i A');

		$minutes_to_add9 = 41;
		$time9 = new DateTime();
		$time9->add(new DateInterval('PT' . $minutes_to_add9 . 'M'));
		$station9 = $time9->format('H:i A');

		$minutes_to_add10 = 43;
		$time10 = new DateTime();
		$time10->add(new DateInterval('PT' . $minutes_to_add10 . 'M'));
		$station10 = $time10->format('H:i A');

		$minutes_to_add11 = 46;
		$time11 = new DateTime();
		$time11->add(new DateInterval('PT' . $minutes_to_add11 . 'M'));
		$station11 = $time11->format('H:i A');

		$minutes_to_add12 = 50;
		$time12 = new DateTime();
		$time12->add(new DateInterval('PT' . $minutes_to_add12 . 'M'));
		$station12 = $time12->format('H:i A');

		$minutes_to_add13 = 54;
		$time13 = new DateTime();
		$time13->add(new DateInterval('PT' . $minutes_to_add13 . 'M'));
		$station13 = $time13->format('H:i A');

		$minutes_to_add14 = 59;
		$time14 = new DateTime();
		$time14->add(new DateInterval('PT' . $minutes_to_add14 . 'M'));
		$station14 = $time14->format('H:i A');

		$minutes_to_add15 = 62;
		$time15 = new DateTime();
		$time15->add(new DateInterval('PT' . $minutes_to_add15 . 'M'));
		$station15 = $time15->format('H:i A');

		$minutes_to_add16 = 66;
		$time16 = new DateTime();
		$time16->add(new DateInterval('PT' . $minutes_to_add16 . 'M'));
		$station16 = $time16->format('H:i A');

		$minutes_to_add17 = 72;
		$time17 = new DateTime();
		$time17->add(new DateInterval('PT' . $minutes_to_add17 . 'M'));
		$station17 = $time17->format('H:i A');

		DB::table('stations')->insert([
			'alabang' => $station1,
			'sucat' => $station2,
			'bicutan' => $station3,
			'fti' => $station4,
			'nichols' => $station5,
			'edsa' => $station6,
			'pasay_road' => $station7,
			'dela_rosa' => $station8,
			'vito_cruz' => $station9,
			'san_andres' => $station10,
			'paco' => $station11,
			'pandacan' => $station12,
			'sta_mesa' => $station13,
			'espana' => $station14,
			'laon_laon' => $station15,
			'bluementrit' => $station16,
			'tutuban' => $station17,
		]);

		$todayDate = Carbon::now()->format('Y-m-d');
        $todayTime = Carbon::now()->format('H:i A');
        // $stations = DB::table('station')->where('id', \DB::raw("(select max(`id`) from northbound)"))->get();
        $stations = DB::table('stations')->where('id',\DB::raw("(select max(`id`) from stations)"))->get();
        return View::make('timing',compact('todayDate', 'todayTime', 'stations'));
    }

    public function delay(Request $request)
    {
    	$station1 = Carbon::now()->format('H:i A');

    	$minutes_to_add2 = 11;
		$time2 = new DateTime();
		$time2->add(new DateInterval('PT' . $minutes_to_add2 . 'M'));
		$station2 = $time2->format('H:i A');

		$minutes_to_add3 = 22;
		$time3 = new DateTime();
		$time3->add(new DateInterval('PT' . $minutes_to_add3 . 'M'));
		$station3 = $time3->format('H:i A');

		$minutes_to_add4 = 37;
		$time4 = new DateTime();
		$time4->add(new DateInterval('PT' . $minutes_to_add4 . 'M'));
		$station4 = $time4->format('H:i A');

		$minutes_to_add5 = 45;
		$time5 = new DateTime();
		$time5->add(new DateInterval('PT' . $minutes_to_add5 . 'M'));
		$station5 = $time5->format('H:i A');

		$minutes_to_add6 = 52;
		$time6 = new DateTime();
		$time6->add(new DateInterval('PT' . $minutes_to_add6 . 'M'));
		$station6 = $time6->format('H:i A');

		$minutes_to_add7 = 63;
		$time7 = new DateTime();
		$time7->add(new DateInterval('PT' . $minutes_to_add7 . 'M'));
		$station7 = $time7->format('H:i A');

		$minutes_to_add8 = 74;
		$time8 = new DateTime();
		$time8->add(new DateInterval('PT' . $minutes_to_add8 . 'M'));
		$station8 = $time8->format('H:i A');

		$minutes_to_add9 = 84;
		$time9 = new DateTime();
		$time9->add(new DateInterval('PT' . $minutes_to_add9 . 'M'));
		$station9 = $time9->format('H:i A');

		$minutes_to_add10 = 90;
		$time10 = new DateTime();
		$time10->add(new DateInterval('PT' . $minutes_to_add10 . 'M'));
		$station10 = $time10->format('H:i A');

		$minutes_to_add11 = 97;
		$time11 = new DateTime();
		$time11->add(new DateInterval('PT' . $minutes_to_add11 . 'M'));
		$station11 = $time11->format('H:i A');

		$minutes_to_add12 = 103;
		$time12 = new DateTime();
		$time12->add(new DateInterval('PT' . $minutes_to_add12 . 'M'));
		$station12 = $time12->format('H:i A');

		$minutes_to_add13 = 109;
		$time13 = new DateTime();
		$time13->add(new DateInterval('PT' . $minutes_to_add13 . 'M'));
		$station13 = $time13->format('H:i A');

		DB::table('northbound')->insert([
			'Alabang' => $station1,
			'Muntinlupa' => $station2,
			'Sanpedro' => $station3,
			'Binan' => $station4,
			'Sta_Rosa' => $station5,
			'Cabuyao' => $station6,
			'Mamatid' => $station7,
			'Calamba' => $station8,
			'Pansol' => $station9,
			'Masili' => $station10,
			'LosBanos' => $station11,
			'College' => $station12,
			'IRRI' => $station13,
		]);

		$todayDate = Carbon::now()->format('Y-m-d');
        $todayTime = Carbon::now()->format('H:i A');
        $northbound = DB::table('northbound')->where('id', \DB::raw("(select max(`id`) from northbound)"))->get();
        return View::make('timing',compact('todayDate', 'todayTime', 'northbound'));
    }

}
