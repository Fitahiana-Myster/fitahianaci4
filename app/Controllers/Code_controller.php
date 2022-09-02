<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Code_model;
use App\Models\Sign_model;
use App\Models\Kaominina_model;
use App\Models\Fokontany_model;

class Code_controller extends Controller
{

  function product_data(){
         $model = new Code_model();
         $data1=$model->getCode()->getResult();
         $a["data"]=$data1;
         echo json_encode($a);
     }

     function check_data(){
            $id_code = $this->request->getVar('id_code');
            $model = new Code_model();
            $data=$model->check_data($id_code)->getResult();
            echo json_encode($data);
        }


    public function code(){

          $model = new Code_model();
          $data['code']  = $model->getCode()->getResult();
          $data['kaominina'] = $model->getKaominina()->getResult();
          echo view('code_view', $data);
          echo view('modal/add_modal', $data);
          echo view('modal/tompony', $data);
          echo view('modal/momba_ny_tany', $data);
          echo view('modal/momba_ny_fananan_tany', $data);
          echo view('modal/tondro_mpifanila_tany', $data);
          echo view('modal/momba_ny_trano', $data);
          echo view('modal/fomba_ampiasana_azy', $data);
          echo view('modal/mpilaza_fifandraisana', $data);
          echo view('modal/mpanao_fanadihadiana', $data);
          echo view('modal/edit_modal', $data);
          echo view('modal/delete_modal', $data);
    }

    public function liste_fkt()
		{
      if ($this->request->getVar('country_id'))
      {
        $codek=$this->request->getVar('country_id');
        $model = new Code_model();
        return $model->liste_fkt($codek);
      }
		}

		public function liste_vhtr()
		{
			$codefkt = $this->request->getVar('state_id');
			$codek = $this->request->getVar('v');
      $model = new Code_model();
		  return $model->liste_vhtr($codefkt, $codek);
		}

    public function save()
    {
        $model = new Code_model();
        $kaominina       = $this->request->getPost('kaominina');
        $fokontany = $this->request->getPost('fokontany');
        $vohitra        = $this->request->getPost('vohitra');
        $laharana_tokan_trano       = $this->request->getPost('laharana_tokan_trano');
        $laharana = $this->request->getPost('laharana');
        $codet=$kaominina."-".$fokontany."-".$vohitra."-".$laharana_tokan_trano;
        $codel=$kaominina."-".$fokontany."-".$vohitra."-".$laharana;
// raha laharana_tokan_trano
        if ($this->request->getPost('laharana_tokan_trano'))
        {
          $data1 = array(
              'code2'        => $codet,
              'kaominina'       => $this->request->getPost('kaominina'),
              'fokontany' => $this->request->getPost('fokontany'),
              'vohitra'        => $this->request->getPost('vohitra'),
              'laharana_tokan_trano'       => $this->request->getPost('laharana_tokan_trano'),
              'laharana' => $this->request->getPost('laharana'),
              'plof'       => $this->request->getPost('plof'),
              'lot' => $this->request->getPost('lot'),
              // 'mpanao_saisi' => $this->request->getPost('mpanao_saisi'),
          );
        }
        // raha laharana
        else {
          $data1 = array(
              'code2'        => $codel,
              'kaominina'       => $this->request->getPost('kaominina'),
              'fokontany' => $this->request->getPost('fokontany'),
              'vohitra'        => $this->request->getPost('vohitra'),
              'laharana_tokan_trano'       => $this->request->getPost('laharana_tokan_trano'),
              'laharana' => $this->request->getPost('laharana'),
              'plof'       => $this->request->getPost('plof'),
              'lot' => $this->request->getPost('lot'),
              // 'mpanao_saisi' => $this->request->getPost('mpanao_saisi'),
          );
        }
        $data = $model->saveCode($data1);
       echo json_encode($data);
    }

    public function update()
    {
        $model = new Code_model();
        $id_code = $this->request->getPost('id_code');
        $kaominina       = $this->request->getPost('kaominina');
        $fokontany = $this->request->getPost('fokontany');
        $vohitra        = $this->request->getPost('vohitra');
        $laharana_tokan_trano       = $this->request->getPost('laharana_tokan_trano');
        $laharana = $this->request->getPost('laharana');
        $codet=$kaominina."-".$fokontany."-".$vohitra."-".$laharana_tokan_trano;
        $codel=$kaominina."-".$fokontany."-".$vohitra."-".$laharana;
        if ($this->request->getPost('laharana_tokan_trano')) {
          $data2 = array(
            'code2'        => $codet,
            'kaominina'       => $this->request->getPost('kaominina'),
            'fokontany' => $this->request->getPost('fokontany'),
            'vohitra'        => $this->request->getPost('vohitra'),
            'laharana_tokan_trano'       => $this->request->getPost('laharana_tokan_trano'),
            'laharana' => $this->request->getPost('laharana'),
            'plof'       => $this->request->getPost('plof'),
            'lot' => $this->request->getPost('lot'),
            // 'mpanao_saisi' => $this->request->getPost('mpanao_saisi'),
          );
        }
        else {
          $data2 = array(
          'code2'        => $codel,
          'kaominina'       => $this->request->getPost('kaominina'),
          'fokontany' => $this->request->getPost('fokontany'),
          'vohitra'        => $this->request->getPost('vohitra'),
          'laharana_tokan_trano'       => $this->request->getPost('laharana_tokan_trano'),
          'laharana' => $this->request->getPost('laharana'),
          'plof'       => $this->request->getPost('plof'),
          'lot' => $this->request->getPost('lot'),
          // 'mpanao_saisi' => $this->request->getPost('mpanao_saisi'),
          );
        }
        $data=$model->updateCode($data2, $id_code);
        echo json_encode($data);
    }

    public function delete()
    {
        $model = new Code_model();
        $id_code = $this->request->getPost('id_code');
        $data=$model->deleteCode($id_code);
        echo json_encode($data);
    }

}
