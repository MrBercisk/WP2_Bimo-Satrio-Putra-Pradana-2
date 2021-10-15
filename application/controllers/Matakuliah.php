<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }

    public function cetak()
    {



        $this->form_validation->set_rules(
            'kode',
            'Kode',
            'trim|required|min_lenght[3]',
            array(
                'required' => '%s Wajib diisi.',
                'min_lenght' => '%s Terlalu pendek.'
            )

        );
        $this->form_validation->set_rules(
            'nama',
            'Nama Matakuliah',
            'required',
            array(
                'required' => '%s Wajib diisi.',
                'min_lenght' => '%s terlalu pendek'
            )

        );
        $this->form_validation->set_rules(
            'sks',
            'SKS',
            'required',
            array(
                'required' => '%s Wajib diisi.',
            )

        );


        if ($this->form_validation->run() != TRUE) {
            $this->load->view('view-form-matakuliah');
        } else {
            echo $this->input->post('nama');
            exit();

            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks')
            ];
            $this->load->view('view-data-matakuliah', $data);
        }
    }
}
