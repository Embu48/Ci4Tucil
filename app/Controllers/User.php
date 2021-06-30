<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\PesananListModel;
use App\Models\ProdukListModel;
use Carbon;
use PDF;
 
class User extends Controller
{
    public function index()
    {
        $session = session();
        if($session->get('user_in')){
            $model1 = new ProdukListModel();
            $model2 = new PesananListModel();
            $data['data1'] = $model1->getProduk();
            $data['data2'] = $model2->getPesanan();
            //echo view("User/header");
            echo view("Part/header-2");
            echo view("Part/sidebar-u");
	        echo view("User/user-2", $data);
            //echo view("User/footer");
            echo view("Part/footer-2");
        //echo "Welcome back, ".$session->get('user_name');
        }else{
            return redirect()->to('/login');
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
    public function cetak($id){
        $model = new PesananListModel();
        $cetak['pendaftar'] = $model->getPesanan($id);
        
        //$data = $cetak[count($cetak)-1];
        //$pdf = PDF::loadView('User/cetak', compact('data'));
        //return $pdf->download('PSB-'.$id.'.pdf');
        //$this->load->library('pdf');
		//$this->pdf->setPaper('A4', 'potrait');
		//$this->pdf->filename = "laporan-data-siswa.pdf";
		//$this->pdf->load_view('laporan_siswa', $cetak);
        $dompdf = new \Dompdf\Dompdf(); 
        $dompdf->loadHtml(view('User/cetak', $cetak));
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream();
    }
}