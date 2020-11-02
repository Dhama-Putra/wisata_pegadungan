<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Latihan extends CI_Controller{
    function __construct()
    { parent :: __construct();
        $this->load->model('M_latihan');
    }

    function index(){
            $data['title']="Tampilan Beranda";
            $data['meta']="Dhama Putra";
            $data['beranda1']="beranda1";
        $this->load->view('template1',$data);
    }

//function data user start-----------------------------------------------------------------------
function data_user($page=0){
    $data['title']="Master Data user";
    $config['total_rows']=$this->M_latihan->get_num_rows('tb_admin');
    $config['per_page']=5;
    $config['base_url']=site_url('latihan/data_user');
    $data['tb_admin']=$this->M_latihan->get_data_user($config['per_page'],$page); 
    $this->pagination->initialize($config);
    $data['beranda1']="data_user";
$this->load->view('template1',$data);
}

function kirim_user(){ //kirim data
    //mengirim post ke model
    $this->M_latihan->kirim_user($_POST);
    //akses fungsi untuk menampilkan halaman daftar peserta
    redirect('Latihan/data_user');
}

function hapus_user($id_admin){ //hapus data
    $where = array('id_admin' => $id_admin);
    $this->M_latihan->hapus_data($where,'tb_admin');
    redirect('Latihan/data_user');
}

public function edit_user($id_admin) { //edit data
 $data['tb_admin'] = $this->M_latihan->edit_user($id_admin)->row();
 $data['beranda1']="edit_user";
 $this->load->view('template1',$data);
}

function update_user($id_admin){ //update data
    $id_admin = $this->input->post('id_admin');
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $jabatan = $this->input->post('jabatan');
    $foto = $this->input->post('foto');
 
    $data = array(
        'nama' => $nama,
        'email' => $email,
        'username' => $username,
        'password' => $password,
        'jabatan' => $jabatan,
        'foto' => $foto
    );
 
    $where = array(
        'id_admin' => $id_admin
    );
 
    $this->M_latihan->update_data($where,$data,'tb_admin');
    redirect('Latihan/data_user');
}

public function search_user(){ //search lokasi
    $keyword = $this->input->post('keyword');
    $data['tb_admin']=$this->M_latihan->get_data_user_keyword($keyword);
    $data['beranda1']="data_user";
    $this->load->view('template1',$data);
}
//function data user end-----------------------------------------------------------------------

//function data lokasi start-----------------------------------------------------------------------
    function data_wisata($page=0){
        $data['title']="Master Data Wisata";
        $config['total_rows']=$this->M_latihan->get_num_rows('tb_wisata');
        $config['per_page']=5;
        $config['base_url']=site_url('latihan/data_wisata');
        $data['tb_wisata']=$this->M_latihan->get_data_wisata($config['per_page'],$page); 
        $this->pagination->initialize($config);
        $data['beranda1']="data_wisata";
    $this->load->view('template1',$data);
    }

    function kirim_wisata(){ //kirim data
        //mengirim post ke model
        $this->M_latihan->kirim_wisata($_POST);
        //akses fungsi untuk menampilkan halaman daftar peserta
        redirect('Latihan/data_wisata');
    }

    function hapus_wisata($id_wisata){ //hapus data
		$where = array('id_wisata' => $id_wisata);
		$this->M_latihan->hapus_data($where,'tb_wisata');
		redirect('Latihan/data_wisata');
	}

    public function edit_wisata($id_wisata) { //edit data
     $data['tb_wisata'] = $this->M_latihan->edit_wisata($id_wisata)->row();
     $data['beranda1']="edit_wisata";
     $this->load->view('template1',$data);
    }

    function update_wisata($id_wisata){ //update data
        $id_wisata = $this->input->post('id_wisata');
        $nama_wisata = $this->input->post('nama_wisata');
        $informasi_wisata = $this->input->post('informasi_wisata');
        $harga_tiket = $this->input->post('harga_tiket');
        $tgl_informasi = $this->input->post('tgl_informasi');
        $jam_buka = $this->input->post('jam_buka');
        $jam_tutup = $this->input->post('jam_tutup');
        $foto = $this->input->post('foto');
     
        $data = array(
            'nama_wisata' => $nama_wisata,
            'informasi_wisata' => $informasi_wisata,
            'harga_tiket' => $harga_tiket,
            'tgl_informasi' => $tgl_informasi,
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'foto' => $foto
        );
     
        $where = array(
            'id_wisata' => $id_wisata
        );
     
        $this->M_latihan->update_data($where,$data,'tb_wisata');
        redirect('Latihan/data_wisata');
    }

    public function search_wisata(){ //search lokasi
        $keyword = $this->input->post('keyword');
        $data['tb_wisata']=$this->M_latihan->get_data_wisata_keyword($keyword);
        $data['beranda1']="data_wisata";
        $this->load->view('template1',$data);
    }
//function data lokasi end-----------------------------------------------------------------------

}?>