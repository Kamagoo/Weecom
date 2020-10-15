<?php

    class Orang extends CI_Controller {
        public function nyasar(){

            $data['heading'] = "ini adalah halaman error";
            $data['message'] = "anda nyasar cuy";

            $this->load->view('errors/html/error_404.php', $data);
        }
    }