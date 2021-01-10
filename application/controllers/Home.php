<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_rs');
    }

    public function index()
    {
        $data = array(
                    'title' => 'Selamat Datang Di Web Sistem Informasi Geografis <br>Pemetaan Rumah Sakit di Kota Surabaya',
                    'isi' => 'v_home'
            );
        $this->load->view('template/v_wrapper', $data, FALSE);
    
    }

    public function kampus()
    {
        $data = array(
            'title' => 'SIG RS Point',
            'kampus' => $this->m_rs->get_all_data(),
            'isi' => 'kampus/v_pemetaan_rs'
    );
$this->load->view('template/v_wrapper', $data, FALSE);
    }

    public function rute()
    {
        $data = array(
                    'title' => 'SIG RS Line / Rute',
                    'isi' => 'v_rute'
            );
        $this->load->view('template/v_wrapper', $data, FALSE);
    
    }

    public function polygon()
    {
        $data = array(
                    'title' => 'SIG RS Polygon',
                    'isi' => 'v_polygon'
            );
        $this->load->view('template/v_wrapper', $data, FALSE);
    
    }

    public function about()
    {
        $data = array(
                    'title' => 'About',
                    'isi' => 'v_about'
            );
        $this->load->view('template/v_wrapper', $data, FALSE);
    
    }

}