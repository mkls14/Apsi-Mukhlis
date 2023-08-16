<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class validModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    
    protected $useSoftDeletes = false;
 
    protected $allowedFields  = [
        'id','email', 'username', 'fullname','alamat','password_hash','reset_at','tempat_lahir','tanggal_lahir','jabatan', 'user_image','active' ,'update_at','deleted_at',
    ];
 
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $skipValidation  = false;

    public function getuser($id)
    {
        return $this->find($id);

    }

    public function ubahuser($id,$data)
    {
        return $this->update($id, $data);
    }

    public function hapus($id)
    {
        return $this->delete(['id' => $id]);
    }
}