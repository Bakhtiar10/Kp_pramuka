<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Modelgrafik extends CI_Model{

    function getGolongan(){
        $query = $this->db->query("SELECT gol_pramuka,SUM(jumlah_gol) AS jumlah_gol FROM tb_anggota GROUP BY gol_pramuka");

        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }


    function getSekolah(){
        $query = $this->db->query("SELECT tingkat_pendidikan,SUM(jumlah_pendidikan) AS jumlah_pendidikan FROM tb_anggota GROUP BY tingkat_pendidikan");

        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
         }
    }

    function getJeniskelamin(){
        $query = $this->db->query("SELECT jenis_kelamin,SUM(jumlah_jk) AS jumlah_jk FROM tb_anggota GROUP BY jenis_kelamin");

        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }


    function getAgama(){
        $query = $this->db->query("SELECT agama,SUM(jumlah_agama) AS jumlah_agama FROM tb_anggota GROUP BY agama");

        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

}
?>