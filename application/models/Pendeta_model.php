<?php 

  /**
   * summary
   */
    class Pendeta_model extends CI_model{
        public function getAllPendeta()
    {
        // //menggunakan cara pertama
        // $query = $this->db->get->('Pendeta');
        // return &query->result_array();
        // menggunakan cara cepat methode chaining // pemanggil data base
        return $this->db->get('pendeta')->result_array();
        
        }

    public function tambahDataPendeta()
    {
      $data =[
         "ntlp" =>$this->input->post('ntlp',true),
         "namapendeta" =>$this->input->post('namapendeta',true),
      ];
      $this->db->insert('pendeta', $data);
    }

    public function getPendetaById($id)
    {
     return $this-db->get_where('pendeta',['id' =>$id])->row_array();
    }
    

        public function cariDataPendeta()
        {
            $keyword = $this->input->post('keyword', true);
            $this->db->like('ntlp', $keyword); 
            $this->db->or_like('namapendeta', $keyword);
            return $this->db->get('pendeta')->result_array(); 
        }

        public function ubahDataPendeta($id)
        {
            $data = [
                // "nama" => htmlspecialchars($_POST["nama"]), jika tdk mengunakan CI
                // //atau cara lain
                "ntlp" => $this->input->post('ntlp', true),
                "namapendeta" => $this->input->post('namapendeta', true),
                
            ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('pendeta', $data);
        }

        public function hapusDataPendeta($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('pendeta');
        }

    } 
