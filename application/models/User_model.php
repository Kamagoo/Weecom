<?php

    class User_model extends CI_Model {
        public function create($data){
            $this->db->insert('karyawan', $data);
        }

        public function login($email){
            $query = $this->db->select('*') //untuk select seluruh data di db
                                ->where('email', $email) //pencocokan dengan email
                                ->get('karyawan'); //mengambil table karyawan

            $row = $query->row();

            return $row;
        }
    }