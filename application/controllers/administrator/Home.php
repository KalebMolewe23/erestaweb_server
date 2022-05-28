<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Home';
        $this->load->view('administrator/layout/header', $data);
        $this->load->view('administrator/home');
        $this->load->view('administrator/layout/footer');
    }
}
