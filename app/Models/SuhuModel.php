<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
use Config\Database;

class SuhuModel extends Model
{
    protected $table      = 'logs';
    protected $primaryKey = 'no';
    protected $returnType     = 'object';
 
    protected $allowedFields = [
        'tanggal', 'hari','waktu','pelanggan','suhu','kelembapan'];
 

    public function satudata()
    {
        return $this->db->table('logs')->orderBy('no', 'DESC')->limit(1)->get()->getRowArray();
    }
   
    public function gethari()
    {
        $query = $this->db->query("SELECT logs.hari as labels FROM logs GROUP BY DAYNAME(logs.tanggal)");
        return $query->getResultArray();
    }
    public function getsuhu()
    {
        $query = $this->db->query("SELECT AVG(logs.suhu) as nilai FROM logs GROUP BY DAYNAME(logs.tanggal)");
        return $query->getResultArray();
    }
    
    public function gettotal()
    {
        $query = $this->db->query("SELECT pembibitan.jumlah_awal as awal, pembibitan.jumlah_akhir as mati, pembibitan.Total as total FROM pembibitan ORDER BY id DESC LIMIT 1");
        return $query->getResultArray();
    }
    public function gettotal1()
    {
        $query = $this->db->query("SELECT ROUND((pembibitan.Total)/(pembibitan.jumlah_awal)*100) as awal1 FROM pembibitan ORDER BY id DESC LIMIT 1");
        return $query->getResultArray();
    }
    public function gettotal2()
    {
        $query = $this->db->query("SELECT ROUND((pembibitan.jumlah_akhir)/(pembibitan.jumlah_awal)*100) as akhir1 FROM pembibitan ORDER BY id DESC LIMIT 1");
        return $query->getResultArray();
    }
    
   
}