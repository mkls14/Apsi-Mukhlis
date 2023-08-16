<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class PembibitanModel extends Model
{
    protected $table      = 'pembibitan';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    
    protected $useSoftDeletes = true;
 
    protected $allowedFields = ['id','tanggal', 'jumlah_awal','jumlah_akhir','Total','created_at','updated_at','deleted_at'];
 
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $skipValidation  = false;
    
 
    public function getProducts()
    {
        return $this->findAll();
    }

    public function tambah($data)
    {

        return $this->insert($data);
    }

    public function getpem($id)
    {
        return $this->find($id);

    }

    public function ubah($id, $data)
    {
        return $this->update($id, $data);
    }

    public function hapus($id)
    {
        return $this->delete(['id'=>$id]);
    }

   
}