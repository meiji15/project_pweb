<?php

class Library extends Controller {
    public function index()
    {
        $data["judul"] = "Library";
        $data["lbr"] = $this->model("Library_model")->getAllLibrary();
        $this->view("theme/header", $data);
        $this->view("library/index", $data);
        $this->view("theme/footer");
    }

    public function tambah()
    {
        $data["judul"] = "Tambah data";
        $data["lbr"] = $this->model("Library_model")->getAllLibrary();
        $this->view("theme/header", $data);
        $this->view("library/tambah", $data);
        $this->view("theme/footer");
    }

    public function simpanData(){		

		if( $this->model('Library_model')->tambahBuku($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','ditambahkan','success');
			header('location: '. BASEURL . '/library');
			exit;			
		}else{
			Flasher::setMessage('Gagal','ditambahkan','danger');
			header('location: '. BASEURL . '/library');
			exit;	
		}
	}

    ######
    public function edit($id){

		$data['judul'] = 'Detail Buku';
		$data['lbr'] = $this->model('Library_model')->getAllLibrary();
		#$data['buku'] = $this->model('BukuModel')->getBukuById($id);
		$this->view('theme/header', $data);
		$this->view('library/tambah', $data);
		$this->view('theme/footer');
	}

	public function updateBuku(){	
		if( $this->model('Library_model')->updateDataBuku($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','diupdate','success');
			header('location: '. BASEURL . '/library');
			exit;			
		}else{
			Flasher::setMessage('Gagal','diupdate','danger');
			header('location: '. BASEURL . '/library');
			exit;	
		}
	}

	public function hapus($id){
		if( $this->model('Library_model')->deleteBuku($id) > 0 ) {
			Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. BASEURL . '/library');
			exit;			
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. BASEURL . '/library');
			exit;	
		}
	}
}