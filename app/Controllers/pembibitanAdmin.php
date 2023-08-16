<?php
 
namespace App\Controllers;
use App\Controllers\BaseController;

use App\Models\PembibitanModel;

use function PHPUnit\Framework\returnSelf;

class PembibitanAdmin extends BaseController
{
    private $model;
    public function __construct()
    {
        helper('form');
        $this-> model = new PembibitanModel();
    }
    public function tambah()
    {  
        $num1 = $this->request->getPost('jumlah_awal');
        $num2 = $this->request->getPost('jumlah_akhir');
        $result = 0;
        $result = $num1 - $num2;
        $data['result'] = $result;

        $data =[
            'tanggal' => $this->request->getPost('tanggal'),
            'jumlah_awal' => $this->request->getPost('jumlah_awal'),
            'jumlah_akhir' => $this->request->getPost('jumlah_akhir'),
            'Total' => $result,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
               
        ];
    
        $success = $this->model->tambah($data);
        if ($success) {
            session()->setFlashdata('success', 'Data berhasil ditambahkan.');
            return redirect()->to(base_url('bibitadmin'));
        }
      
    }

    public function getpem($id)
    {
        $pembibitan = new PembibitanModel();
        $data['pembibitan'] = $pembibitan->getpem($id);
        
        return view('data/pembibitanadmin', $data);
    }


    public function ubahpem($id)
    {
        $num1 = $this->request->getPost('jumlah_awal');
        $num2 = $this->request->getPost('jumlah_akhir');
        $result = 0;
        $result = $num1 - $num2;
        $data['result'] = $result;

        $data =[
            'tanggal' => $this->request->getPost('tanggal'),
            'jumlah_awal' => $this->request->getPost('jumlah_awal'),
            'jumlah_akhir' => $this->request->getPost('jumlah_akhir'),
            'Total' => $result,
            'updated_at' => date('Y-m-d H:i:s')
               
        ];

       $success = $this->model->ubah($id, $data);
        if ($success) {
            session()->setFlashdata('success', 'Data berhasil diubah.');
            return redirect()->to(base_url('bibitadmin'));
        }
    }

    public function hapus($id)
    {
        
        $data =[
                'id' => $id,
                'deleted_at' => date('Y-m-d H:i:s')
            ];

            $success = $this->model->hapus($id, $data);
        if ($success) {
            session()->setFlashdata('hapus', 'Data berhasil dihapus.');
            return redirect()->to(base_url('bibitadmin'));
        }
    }

    public function admin()
    {
        $data['title'] = 'Pembibitan';
        $bibit = new PembibitanModel();
        $data['pembibitan'] = $bibit->getProducts();
        return view('data/pembibitanadmin', $data);
       
    }
}