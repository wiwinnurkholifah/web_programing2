<?php
class Latihan2 extends CI_Controller
{
    public function index()
    {
        echo "Welcome to Programming Web Class 5C..";
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Model1');
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model1->jumlah($n1,$n2);

        $this->load->view('view-latihan2', $data); 
    }
}