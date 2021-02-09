<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function index()
  {
    $this->load->library('form_validation');

    $this->form_validation->set_rules('nama', 'Name', 'required|', [
      'required' => 'Nama harus diisi.'
    ]);
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]', [
      'required' => 'Email harus diisi.',
      'valid_email' => 'Email tidak valid',
      'is_unique' => 'Email sudah pernah dipergunakan.'
    ]);
    $this->form_validation->set_rules('notelp', 'Notelp', 'required|Numeric|min_length[11]|max_length[13]|is_unique[user.notelp]', [
      'required' => 'No.Telp harus diisi.',
      'Numeric' => 'No.Telp harus berisikan angka.',
      'min_length' => 'Masukkan No.Telp yang valid',
      'max_length' => 'Masukkan No.Telp yang valid',
      'is_unique' => 'Nomor yang anda masukan sudah pernah digunakan'
    ]);
    $this->form_validation->set_rules('pesan', 'Pesan', 'required', [
      'required' => 'Pesan harus diisi.'
    ]);

    if ($this->form_validation->run() == false) {
      $data['title'] = 'My Portfolio';
      $this->load->view('home/index', $data);
    } else {
      $data = [
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'notelp' => htmlspecialchars($this->input->post('notelp', true)),
        'pesan' => htmlspecialchars($this->input->post('pesan', true))
      ];

      $this->db->insert('user', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Selamat!</strong> terimakasih telah berkontribusi</div>');
      redirect('home');
    }
  }
}
