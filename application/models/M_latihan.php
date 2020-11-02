<?php
class M_latihan extends CI_Model{

    function cek_login($table, $where){ //sesion login
        return $this->db->get_where($table, $where);
    }

//function data user start-----------------------------------------------------------------------
function get_data_user($limit, $page){
    $this->db->limit($limit, $page);
    $data=$this->db->get('tb_admin')->result();
    return $data;
} 

function kirim_user($post){ //kirim lokasi
    $data = array(
        'nama'=>$post['nama'],
        'email'=>$post['email'],
        'username'=>$post['username'],
        'password'=>$post['password'],
        'jabatan'=>$post['jabatan'],
        'foto'=>$post['foto'],
    );   
    $this->db->insert('tb_admin',$data);
}

public function edit_user($id_admin){ //edit lokasi
    $this->db->select('*');
    $this->db->from('tb_admin');
    $this->db->where('id_admin', $id_admin);

    return $this->db->get();
   }

public function get_data_user_keyword($keyword){ //search lokasi
    $this->db->select('*');
    $this->db->from('tb_admin');
    $this->db->like('nama',$keyword);
    $this->db->or_like('jabatan',$keyword);
    return $this->db->get()->result();
}
//function data user end-----------------------------------------------------------------------

//function data lokasi start-----------------------------------------------------------------------
    function get_data_wisata($limit, $page){
        $this->db->limit($limit, $page);
        $data=$this->db->get('tb_wisata')->result();
        return $data;
    } 

    function kirim_wisata($post){ //kirim lokasi
        $data = array(
            'nama_wisata'=>$post['nama_wisata'],
            'informasi_wisata'=>$post['informasi_wisata'],
            'harga_tiket'=>$post['harga_tiket'],
            'tgl_informasi'=>$post['tgl_informasi'],
            'jam_buka'=>$post['jam_buka'],
            'jam_tutup'=>$post['jam_tutup'],
            'foto'=>$post['foto'],
        );   
        $this->db->insert('tb_wisata',$data);
    }

    public function edit_wisata($id_wisata){ //edit lokasi
        $this->db->select('*');
        $this->db->from('tb_wisata');
        $this->db->where('id_wisata', $id_wisata);
   
        return $this->db->get();
       }
    
    public function get_data_wisata_keyword($keyword){ //search lokasi
        $this->db->from('tb_wisata');
        $this->db->like('nama_wisata',$keyword);
        return $this->db->get()->result();
    }
//function data lokasi end-----------------------------------------------------------------------

    function hapus_data($where,$table){ //hapus data
		$this->db->where($where);
		$this->db->delete($table);
	}

	function update_data($where,$data,$table){ //update data
		$this->db->where($where);
		$this->db->update($table,$data);
    }	

    function get_num_rows($table){ //pagination
        $data=$this->db->get($table)->num_rows();
        return $data;
    }
}?>
