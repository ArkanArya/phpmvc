<?php
class User extends Controller{
    public function index(){
        $data['judul']="User";
        $this->view('templates/header',$data);
        $this->view('user/index');
        $this->view('templates/footer');
    }
    public function profile($n ="", $pekerjaan = "Pelajar",$nama =" Arkan Arya Reza Maulana",$jurusan = "Rekayasa Perangkat Lunak", $sekolah = "SMKN 2 Trenggalek"){
        $data['judul']="User";
        $data['nama']= $nama;
        $data['pekerjaan']=$pekerjaan;
        $data['jurusan']=$jurusan;
        $data['sekolah']=$sekolah;
        $this->view('templates/header',$data);
        $this->view('user/profile',$data);
        $this->view('templates/footer');
    }
}
