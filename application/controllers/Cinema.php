<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Cinema extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-input-cinema');
    }
    public function cetak()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'judul' => $this->input->post('judul'),
            'pukul' => $this->input->post('pukul'),
            'tipe' => $this->input->post('tipe'),
            'jumpes' => $this->input->post('jumpes'),
            'harga' => $this->input->post('harga'),
            'total' => $this->input->post('total')
        ];
        $this->load->view('view-output-cinema', $data);
    }
}
