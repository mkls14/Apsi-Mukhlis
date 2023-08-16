<?php

namespace App\Controllers;
use App\Models\SuhuModel;
class user extends BaseController
{
    public function index()
    {
        $model = new SuhuModel();
                
        $hari = $model->gethari();
        $suhu = $model->getsuhu();
       
        $total = $model->gettotal();
        $total1 = $model->gettotal1();
        $total2 = $model->gettotal2();
        
       
        $data['hari'] =  $hari;
        $data['nilai'] = $suhu;
        $data['pie'] = $total;
        $data['awal'] = $total;
        $data['hidup'] = $total1;
        $data['mati'] = $total2;
        $data['title'] = 'Dashboard';
  
        return view('user/index', $data);

    }

    public function get_data(){
        $model = new SuhuModel();
        $data = $model->satudata();
        echo json_encode($data);
    }

}
