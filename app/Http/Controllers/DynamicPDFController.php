<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class DynamicPDFController extends Controller
{
    function index()
    {
     $deliveries = $this->get_delivery_data();
     return view('dynamic_pdf')->with('deliveries', $deliveries);
    }

    function get_delivery_data()
    {
     $deliveries = DB::table('deliveries')
         ->limit(10)
         ->get();
     return $deliveries;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_delivery_data_to_html());
     return $pdf->stream();
    }

    function convert_delivery_data_to_html()
    {
     $deliveries = $this->get_delivery_data();
     $output = '
     <h1 align="center">Delivery Data</h1>
     <br>
     <hr>
     <br>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="10%">Order ID</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Customer Name</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Customer ID</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Receivers Name</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Receiver Contact</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Receivers NIC</th>
   </tr>
     ';  
     foreach($deliveries as $delivery)
     {
      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$delivery->order_id.'</td>
       <td style="border: 1px solid; padding:12px;">'.$delivery->customer_name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$delivery->customer_id.'</td>
       <td style="border: 1px solid; padding:12px;">'.$delivery->receivers_name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$delivery->receiver_contact.'</td>
       <td style="border: 1px solid; padding:12px;">'.$delivery->receivers_nic.'</td>
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }
}
