<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Home';
        $this->load->view('dashboard/layout/header', $data);
        $this->load->view('dashboard/home');
        $this->load->view('dashboard/layout/footer');
    }
}
