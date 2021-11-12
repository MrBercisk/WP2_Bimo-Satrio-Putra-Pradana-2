<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Sepatu extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-input-transaksi');
    }
    public function cetak()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nohp' => $this->input->post('nohp'),
            'merk' => $this->input->post('merk'),
            'ukuran' => $this->input->post('ukuran'),
            'harga' => $this->input->post('harga')


        ];
        $this->load->view('view-output-transaksi', $data);
    }
}
