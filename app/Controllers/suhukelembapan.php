<?php
 
namespace App\Controllers;
 

use App\Models\SuhuModel;

class suhukelembapan extends BaseController
{
    public function index()
    {
        $data['title'] = 'Suhu & Kelembaban';
        $suhu = new SuhuModel();
        $data['logs'] = $suhu->findAll();
        return view('data/index', $data);
       
    }
    
}