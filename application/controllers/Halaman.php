<?php


class Halaman extends CI_Controller {

    public function __construct(){
        parent::__construct();
        
    }

	public function tampil()
	{

        $data['title'] = "ini title dinamis";
        $data['dataKaryawan'] = $this->Karyawan_model->semua()
                                     ->row();

        $this->load->view('template/header', $data);
        $this->load->view('tampilanSaya', $data);
        $this->load->view('template/footer', $data);
    }
    
    public function aku_kamu($anak = "")
    {
        $data['title'] = "ini halaman aku - kamu";
        $data['namaOrang'] = "Haidar";
            
            $this->load->view('template/header', $data);
            $this->load->view('tes', $data);
            $this->load->view('template/footer', $data);
    }
}
