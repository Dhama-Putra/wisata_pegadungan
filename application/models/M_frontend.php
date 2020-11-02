<?php
class M_frontend extends CI_Model{

    function beranda(){
        $data=$this->db->get('tb_wisata')->result();
        return $data;
    }
    function tirta_buana(){
        $this->db->where('nama_wisata','Air Terjun Tirta Buana');
        $data=$this->db->get('tb_wisata')->result();
        return $data;
    }
    function tibuan_kembar(){
        $this->db->where('nama_wisata','Tibuan Kembar');
        $data=$this->db->get('tb_wisata')->result();
        return $data;
    }
    function view_sawah(){
        $this->db->where('nama_wisata','View Sawah');
        $data=$this->db->get('tb_wisata')->result();
        return $data;
    }

    function get_data_penduduk($limit,$page){
        $this->db->limit($limit, $page);
        $data=$this->db->get('data_penduduk')->result();
        return $data;       
    }
    function get_data_agama(){
        $data=$this->db->get('data_penduduk')->result();
        $query = $this->db->query("SELECT agama,SUM(agama) FROM data_penduduk GROUP BY agama");
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    function get_kritik_saran($limit,$page){
        $this->db->limit($limit, $page);
        $data=$this->db->get('kritik_saran')->result();
        return $data;
    }
    function kirim_kritik($post){
        //menampung post yang dikirim oleh controller untuk disimpan dalam array sesuai field dalam tabel
        $data=array(
        //'sesuai field tabel'=>'sesuai name input dalam form'
            'Email'=>$post['Email'],
            'Kritik_saran'=>$post['Kritik_saran'],
    );
    //menyimpan data ke tabel
    $this->db->insert('kritik_saran',$data);
    }
    function get_num_rows($table){
        $data=$this->db->get($table)->num_rows();
        return $data;
    }
    ///session login///  
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    } 
}?>
