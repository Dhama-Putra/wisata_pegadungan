<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Frontend extends CI_Controller{
    function __construct()
    { parent :: __construct();
        $this->load->model('M_frontend');
        $this->load->helper('url_helper');
    }
    function index(){
            $data['title']="Tampilan Beranda";
            $data['meta']="Dhama Putra";
            $data['beranda']="beranda";
            $data['tb_wisata'] = $this->M_frontend->beranda(); 
            $data['sidebar']="sidebar";
        $this->load->view('template',$data);
    } 

    function tirta_buana(){
        $data['title']="Air Terjun Tirta Buana";
        $data['meta']="Dhama Putra";
        $data['beranda']="tirta_buana";
        $data['tb_wisata'] = $this->M_frontend->tirta_buana(); 
    $this->load->view('tirta_buana',$data);
    }

    function tibuan_kembar(){
        $data['title']="Tibuan Kembar";
        $data['meta']="Dhama Putra";
        $data['beranda']="tibuan_kembar";
        $data['tb_wisata'] = $this->M_frontend->tibuan_kembar(); 
    $this->load->view('tibuan_kembar',$data);
    }

    function view_sawah(){
        $data['title']="View Sawah";
        $data['meta']="Dhama Putra";
        $data['beranda']="view_sawah";
        $data['tb_wisata'] = $this->M_frontend->view_sawah(); 
    $this->load->view('view_sawah',$data);
    }
    
    function kepala_desa(){
        $data['title']="Kepala Desa";
        $data['meta']="Dhama Putra";
        $data['beranda']="kepala_desa";
        $data['sidebar']="sidebar";
    $this->load->view('template',$data);
    }  
    
    function perangkat_desa($page=0){
        $data['title']="Perankat Desa";
        $data['meta']="ini adalah berita";
        $config['total_rows']=$this->M_latihan->get_num_rows('data_penduduk');
        $config['per_page']=2;
        $config['base_url']=site_url('latihan/perangkat_desa');
        $data['data_penduduk']=$this->M_latihan->perangkat_desa($config['per_page'],$page); 
        $this->pagination->initialize($config);
        $data['beranda']="perangkat_desa";
        $data['sidebar']="sidebar";

        $this->load->view('template',$data);
    }

    function agenda($page=0){
        $data['title']="Agenda Acara";
        $data['meta']="Agenda acara desa";
        $config['total_rows']=$this->M_latihan->get_num_rows('agenda');
        $config['per_page']=1;
        $config['base_url']=site_url('latihan/agenda');
        $data['agenda']=$this->M_latihan->get_agenda($config['per_page'],$page); 
        $this->pagination->initialize($config);
        $data['beranda']="agenda";
        $data['sidebar']="sidebar";
        
    $this->load->view('template',$data);
    }

    function data_penduduk($page=0){
        $data['title']="Data Penduduk";
        $data['meta']="Dhama Putra";
        $config['total_rows']=$this->M_latihan->get_num_rows('data_penduduk');
        $config['per_page']=3;
        $config['base_url']=site_url('latihan/data_penduduk');
        $data['data_penduduk']=$this->M_latihan->get_data_penduduk($config['per_page'],$page); 
        $this->pagination->initialize($config);
        $data['beranda']="data_penduduk";
        $data['sidebar']="sidebar";

    $this->load->view('template',$data);
    }

    function data_agama(){
        $data['beranda']="data_agama";
        $data['data_penduduk']=$this->M_latihan->get_data_agama();
        $this->load->view('template',$data);
    }

    function kritik_saran($page=0){
        $data['title']="kritik dan saran";
        $data['meta']="kritik dan saran";
        $config['total_rows']=$this->M_latihan->get_num_rows('kritik_saran');
        $config['per_page']=10;
        $config['base_url']=site_url('latihan/kritik_saran');
        $data['kritik_saran']=$this->M_latihan->get_kritik_saran($config['per_page'],$page); 
        $data['beranda']="kritik_saran";
        $data['sidebar']="sidebar";

        // load the session library
		$this->load->library('session');
		$this->load->helper(array('captcha','url'));
 
        // if form was submitted and given captcha word matches one in session
        if ($this->input->post() && ($this->input->post('secutity_code') == $this->session->userdata('mycaptcha'))) {
			$this->load->view('berhasil.php');
        }
		else
		{
            // load codeigniter captcha helper
            $this->load->helper('captcha');
 
            $vals = array(
                'img_path'	 => './captcha/',
                'img_url'	 => base_url().'captcha/',
                'img_width'	 => '200',
                'img_height' => 30,
                'border' => 0, 
                'expiration' => 7200
            );
 
            // create captcha image
            $cap = create_captcha($vals);
 
            // store image html code in a variable
            $data['image'] = $cap['image'];
 
            // store the captcha word in a session
            $this->session->set_userdata('mycaptcha', $cap['word']);
 
            $this->load->view('template', $data);
 
        }
    }

    function kirim_kritik(){
        //mengirim post ke model
        $this->M_latihan->kirim_kritik($_POST);
        //akses fungsi untuk menampilkan halaman daftar peserta
        redirect('latihan/kritik_saran');
    }

}?>