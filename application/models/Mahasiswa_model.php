<?php

class Mahasiswa_model extends CI_Model
{
   public function getMahasiswa() {
    return $this->get('mahasiswa')->result_array();
   }
}