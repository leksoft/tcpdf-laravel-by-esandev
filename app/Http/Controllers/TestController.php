<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class TestController extends Controller
{
    public function index(){
         PDF::AddPage('L', 'A4');
       
        PDF::SetFont('THSarabunNew', 'B', 20, '', 'false');
        PDF::SetY(10);  //ระยะห่างจากด้านบนมาล่าง
        PDF::SetX(0);  //ระยะห่างจากซ้ายไปขวา
        PDF::Cell(0, 0, 'อีสานเดฟ มหาสารคาม', 0, false, 'C', 0, '', 0, false, 'M', 'M');

        PDF::SetFont('THSarabunNew', 'B', 16, '', 'false');
        PDF::SetY(30);  //ระยะห่างจากด้านบนมาล่าง
        PDF::SetX(10);  //ระยะห่างจากซ้ายไปขวา
        PDF::Cell(0, 0, 'วัน/เดือน/ปี', 1, false, 'C', 0, '', 0, false, 'M', 'M');

        PDF::SetFont('THSarabunNew', 'B', 16, '', 'false');
        PDF::SetY(34);  //ระยะห่างจากด้านบนมาล่าง
        PDF::SetX(10);  //ระยะห่างจากซ้ายไปขวา
        PDF::MultiCell(40, 5, 'เดือน/ปี', 1, 'C',0, 1, '', '', true);

        PDF::Output('PDF-Report.pdf','I');
    }
}
