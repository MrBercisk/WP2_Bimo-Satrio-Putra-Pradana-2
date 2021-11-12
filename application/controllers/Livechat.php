<?php
class Livechat extends CI_Controller
{

    function index()
    {
        $data = array(
            'chat' => $this->db->order_by('id', 'ASC')->get('chat')->result()
        );
        $this->load->view('chat', $data);
    }
    public function store()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'pesan' => $this->input->post('pesan')

        );
        $this->db->insert('chat', $data);
    }
}
