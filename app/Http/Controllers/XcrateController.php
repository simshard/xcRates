<?php

namespace App\Http\Controllers;

use App\Models\Xcrate;
use Illuminate\Http\Request;

class XcrateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $xrdata = Xcrate::get()//; //all
        // ->where('period', '01/Jan/2023 to 31/Jan/2023');
        // $monthlyxr = Xcrate::distinct()->get(['period']);//monthly  data set

        // return view('allxr', [
        //     'xrdata'=>$xrdata,
        //     'monthlyxr'=>$monthlyxr
        // ]
        // );

        //Livewire table   gets its data  from XrTable not the controller
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(request()->post());
        $attributes=request()->validate([
             'month'=>['required','numeric','max_digits:2','min:1','max:12','digits_between:01,12'],
             'year' => ['required','numeric','max_digits:2','min:22','max:24'],
         ]);
        $month = $attributes['month'] ;
        $year = $attributes['year'] ;
        $url = 'http://www.hmrc.gov.uk/softwaredevelopers/rates/exrates-monthly-'.   $month.$year.'.XML';
        //dd($url);
        // http://www.hmrc.gov.uk/softwaredevelopers/rates/exrates-monthly-0123.XML
        $xml_string = file_get_contents($url);
        $xml = simplexml_load_string($xml_string);
        $json = json_encode($xml);
        $data = json_decode($json, true);
        $period = $data['@attributes']['Period'];

        // foreach ($data['exchangeRate'] as $index => $data) {
        //     $xrdata[] =[
        //         'countryName' => $data['countryName'],
        //          'countryCode' => $data['countryCode'] ,
        //          'currencyName'  => $data['currencyName'],
        //         'currencyCode'  => $data['currencyCode'],
        //          'rateNew'  => $data['rateNew'],
        //         'period' => $period,
        //     ];
        // }

        
        dd($data);
        //       Xcrate::insert($xrdata);
        //      echo "data stored";
        //redirect with flash msg
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
