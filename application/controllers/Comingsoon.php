<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Comingsoon extends CI_Controller
{
    public function index()
    {
        $this->load->view('web/comingsoon');
    }
}
