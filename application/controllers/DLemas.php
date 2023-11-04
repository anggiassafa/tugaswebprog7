<?php 
class DLemas extends CI_Controller 
{ 
    
    public function index()
    
    {
        
        $this->load->view('view-form-dlemas');
    }
    
    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'Nama Siswa',
'required|min_length[3]', [
            'required' => 'Nama Siswa Harus Diisi',
            'min_length' => 'Nama terlalu pendek'
        ]);
        
        $this->form_validation->set_rules('nis', 'NIS',
'required|min_length[3]', [
            'required' => 'NIS Harus Diisi',
            'min_lenght' => 'Nama terlalu pendek'
        ]);

        $this->form_validation->set_rules('nis', 'NIS',
'required|min_length[3]', [
            'required' => 'NIS Harus Diisi',
            'min_lenght' => 'Nama terlalu pendek'
        ]);

        $this->form_validation->set_rules('nis', 'NIS',
'required|min_length[3]', [
            'required' => 'NIS Harus Diisi',
            'min_lenght' => 'NIS terlalu pendek'
        ]);

        $this->form_validation->set_rules('kelas', 'Kelas',
'required|min_length[3]', [
            'required' => 'Kelas Harus Diisi',
            'min_lenght' => 'Kelas terlalu pendek'
        ]);

        $this->form_validation->set_rules('tgl_lhr', 'Tanggal Lahir',
'required|min_length[3]', [
            'required' => 'Tanggal Lahir Harus Diisi',
            'min_lenght' => 'Tanggal Lahir terlalu pendek'
        ]);

        $this->form_validation->set_rules('tmpt_lhr', 'Tempat Lahir',
'required|min_length[3]', [
            'required' => 'Tempat Lahir Harus Diisi',
            'min_lenght' => 'Tempat Lahir terlalu pendek'
        ]);

        $this->form_validation->set_rules('alamat', 'Alamat',
'required|min_length[3]', [
            'required' => 'Alamat Harus Diisi',
            'min_lenght' => 'Alamat terlalu pendek'
        ]);

        $this->form_validation->set_rules('jk', 'Jenis Kelamin',
'required', [
            'required' => 'Jenis Kelamin Harus Diisi',
        ]);

        $this->form_validation->set_rules('agama', 'Agama',
'required', [
            'required' => 'Agama Harus Diisi',
        ]);

        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-dlemas');
        } else {
            $data = [
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tgl_lhr' => $this->input->post('tgl_lhr'),
            'tmpt_lhr' => $this->input->post('tmpt_lhr'),
            'alamat' => $this->input->post('alamat'),
            'jk' => $this->input->post('jk'),
            'agama' => $this->input->post('agama'),
            ];

            $this->load->view('view-data-dlemas', $data);
        }
    }
}