<?php
header('Access-Control-Allow-Origin: *');



defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Data extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }


    function index_get(){
        $data = null;
        if($this->get('pilihan') == 1){
                $data = $this->db->get('ruangperawatan')->result();
        }else{
                $data = $this->db->get('ruangperawatan2')->result(); 
        }
                $this->response($data, 200);
    }

   
    function index_post() {
        $datas = json_decode($this->post('data'));
        // $this->response((int)count($data[0]), 200);
        if($this->post('pilihan') == 1){
            for($x = 0; $x < count($datas[0]); $x++){
                $data = array(
                    'jumlah'     => $datas[1][$x],
                    'lama'       => $datas[2][$x],
                    'baru'       => $datas[3][$x],
                    'pulang'     => $datas[4][$x],
                    'pria'       => $datas[5][$x],
                    'wanita'     => $datas[6][$x],
                    'umum'       => $datas[7][$x],
                    'janda'      => $datas[8][$x],
                    'bpjs'       => $datas[9][$x]);
    
                $this->db->where('id', $datas[0][$x]);
                $result = $this->db->update('ruangperawatan', $data);
            }
        }else{
            for($x = 0; $x < count($datas[0]); $x++){
                $data = array(
                    'jumlah'     => $datas[1][$x],
                    'inap'       => $datas[2][$x],
                    'rj'         => $datas[3][$x],
                    'aps'        => $datas[4][$x],
                    'rujuk'      => $datas[5][$x],
                    'doa'        => $datas[6][$x],
                    'umum'       => $datas[7][$x],
                    'janda'      => $datas[8][$x],
                    'bpjs'       => $datas[9][$x]);
    
                $this->db->where('id', $datas[0][$x]);
                $result = $this->db->update('ruangperawatan2', $data);
            }
        }

        
      
     
        if($result) {
            $this->response($result, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
            
    }

    
}

?>