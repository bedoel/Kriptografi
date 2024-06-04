<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kripto extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/template_header');
        $this->load->view('kripto');
        $this->load->view('templates/template_footer');
    }
    public function enkripsi()
    {
        $this->load->view('templates/template_header');
        $this->load->view('enkripsi');
        $this->load->view('templates/template_footer');
    }

    public function dekripsi()
    {
        $this->load->view('templates/template_header');
        $this->load->view('dekripsi');
        $this->load->view('templates/template_footer');
    }

    public function process()
    {
        $password = $this->input->post('password');
        $pkey = $this->input->post('pkey');
        $usertext = $this->input->post('usertext');
        $action = $this->input->post('action');

        $kripto_method = 'aes-128-cbc';

        $key = hash('sha256', $password);

        $iv = substr(hash('sha256', $pkey), 0, 16);

        if ($action == 'enkripsi') {
            $output = openssl_encrypt($usertext, $kripto_method, $key, 0, $iv);
            $output = base64_encode($output);
            $data['output'] = $output;
            $this->load->view('templates/template_header');
            $this->load->view('enkripsi', $data);
            $this->load->view('templates/template_footer');
        } elseif ($action == 'dekripsi') {
            $output = base64_decode($usertext);
            $output = openssl_decrypt($output, $kripto_method, $key, 0, $iv);
            $data['output'] = $output;
            $this->load->view('templates/template_header');
            $this->load->view('dekripsi', $data);
            $this->load->view('templates/template_footer');
        } else {
            redirect(base_url('kripto'));
            exit();
        }
    }
}
