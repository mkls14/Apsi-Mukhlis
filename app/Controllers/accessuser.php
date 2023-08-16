<?php
 
namespace App\Controllers;
use App\Controllers\BaseController;

use \Myth\Auth\Models\UserModel;
use App\Models\validModel;

use function PHPUnit\Framework\returnSelf;

class accessuser extends BaseController
{
    private $model;
    public function __construct()
    {
        helper('form');
        $this-> model = new validModel();
    }

    public function getuser($id)
    {
        $user = new validModel();
        $data['users'] = $user->getuser($id);
        
        return view('account/index', $data);
    }

    public function ubah($id)
    {    
        $user = new validModel();
        

       

        $data =[
            'fullname' => $this->request->getPost('fullname'),
            'jabatan' => $this->request->getPost('jabatan'),
            'email' => $this->request->getPost('email'),
            'username' => $this->request->getPost('username'),
            'alamat' => $this->request->getPost('alamat'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'updated_at' => date('Y-m-d H:i:s')
               
        ];
       
        $success = $this->model->ubahuser($id,$data);
        if ($success) {
            session()->setFlashdata('success', 'Data berhasil diubah.');
            return redirect()->to(base_url('account'));
        }    
    }

    public function ubahfoto($id)
    {
        $profilePicture = $this->request->getFile('profile_picture');
        
        $newFileName = $profilePicture->getRandomName();
        $profilePicture->move(ROOTPATH . 'public/assets/img/team', $newFileName);

        $data =[
            'user_image' => $newFileName     
        ];
       
        $success = $this->model->ubahuser($id,$data);
        if ($success) {
            session()->setFlashdata('success', 'Foto berhasil diubah.');
            return redirect()->to(base_url('account'));
        }    

    }

    public function hapus($id)
    {
        $user = new validModel();
        $data =[
                'deleted_at' => date('Y-m-d H:i:s')
            ];

        $success = $this->model->hapus($id,$data);
        if ($success) {
            session()->setFlashdata('success', 'Data berhasil dihapus.');
            return redirect()->to(base_url('admin/userlist'));
        }                   
    }

    public function getuser1($id)
    {
        $user = new validModel();
        $data['users'] = $user->getuser($id);
        
        return view('admin/userlist', $data);
    }

    public function ubah1($id)
    {    
        $user = new validModel();

        $data =[
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'fullname' => $this->request->getPost('fullname'),
            'active' => $this->request->getPost('active'),
            'updated_at' => date('Y-m-d H:i:s')
               
        ];
        $success = $this->model->ubahuser($id,$data);
        if ($success) {
            session()->setFlashdata('success', 'Data berhasil diubah.');
            return redirect()->to(base_url('userlist'));
        }    
    }

   
}

    