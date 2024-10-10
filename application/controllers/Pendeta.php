<?php

class Pendeta extends CI_Controller
{

    public function __construct()
    {
    	parent::__construct();
        $this->load->model('Pendeta_model');
    
    }
	 public function index()
	{	
		$data['judul'] = 'Halaman Pendeta';
		$data['pendeta']=$this->Pendeta_model->getAllPendeta();
        if($this->input->post('keyword')){
            $data ['pendeta'] = $this->Pendeta_model->cariDataPendeta();
        }
            $this->load->view('templates/header',$data);
            $this->load->view('pendeta/index', $data);
            $this->load->view('templates/footer');
    }
     public function tambah()
     {
        $data['judul'] = 'Form Tambah Data Pendeta';
        $this->form_validation->set_rules('ntlp', 'Ntlp','required|is_unique[Pendeta.ntlp]');
        $this->form_validation->set_rules('namapendeta', 'NamaPendeta','required|is_unique[Pendeta.namapendeta]');
        if($this->form_validation->run() == False){ 
            $this->load->view('templates/header',$data);
            $this->load->view('pendeta/tambah', $data);
            $this->load->view('templates/footer'); 
        }else{
            $this->Pendeta_model->tambahDataPendeta();
            $this->session->set_flashdata('flash', 'Ditambahkan.');
            redirect('pendeta');
        } 
    }
     

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Pendeta';
        $data['pendeta']= $this->Pendeta_model->getPendetaById($id);

        $this->form_validation->set_rules('ntlp', 'Ntlp','required|is_unique[Pendeta.ntlp]');
        $this->form_validation->set_rules('namapendeta', 'NamaPendeta','required|is_unique[Pendeta.namapendeta]');
        if($this->form_validation->run() == False){ 
            $this->load->view('templates/header',$data);
            $this->load->view('pendeta/ubah', $data);
            $this->load->view('templates/footer'); 
        }else{
            $this->Pendeta_model->ubahDataPendeta();
            $this->session->set_flashdata('flash', 'Diubah.');
            redirect('pendeta');
        }
    }

   public function Detail($id)
   {
    $data['judul']= 'Detail data Pendeta';
    $data['pendeta']= $this->Pendeta_model->getPendetaById($id);
       $this->load->view('templates/header',$data);
       $this->load->view('pendeta/ubah', $data);
       $this->load->view('templates/footer'); 
   }

   public function hapus($id)
   {
    $this->Pendeta_model->hapusDataPendeta($id);
    $this->session->set_flashdata('flash', 'dihapus');
    redirect('pendeta'); 
   }
}
 
