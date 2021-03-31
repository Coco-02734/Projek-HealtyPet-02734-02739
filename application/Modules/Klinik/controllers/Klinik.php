<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Klinik extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Home Klinik | Healty Pets';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('index', $data);
        $this->load->view('templates/footer');
    }
}
