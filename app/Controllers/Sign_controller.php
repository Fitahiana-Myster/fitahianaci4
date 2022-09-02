<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Sign_model;

class Sign_controller extends BaseController
{
  public function index()
  {
      helper(['form']);
      echo view('login/sign');
  }
  public function sign_up()
  {
      helper(['form']);
      echo view('login/sign_up');
  }

  public function check_login()
  {
      $session = session();
      $model = new Sign_model();
      $adrs = $this->request->getVar('adrs');
      $mdp2 = $this->request->getVar('mdp');

      $data = $model->where('adrs', $adrs)->first();
      if($data){
             $pass = $data['mdp'];
             $authenticatePassword = password_verify($mdp2, $pass);
             if($pass == MD5($mdp2)){
                   $ses_data = [
                       'id' => $data['id'],
                       'nom' => $data['nom'],
                       'adrs' => $data['adrs'],
                       'mdp' => $data['mdp'],
                       'isLoggedIn' => TRUE
                   ];

                   $session->set($ses_data);
                   return redirect()->to('Code');

                 }
             else{
                 $session->setFlashdata('message', 'Password is incorrect.');
                return redirect()->route('Sign');
             }

         }
     else{
         $session->setFlashdata('message', 'Email does not exist.');
         return redirect()->to('Sign');
     }
  }
public function add_compte(){
  $session = session();
  $model = new Sign_model();
  $nom_up = $this->request->getVar('nom_up');
  $adrs_up = $this->request->getVar('adrs_up');
  $mdp_up = $this->request->getVar('mdp_up');
  $mdp2_up = $this->request->getVar('mdp2_up');
  if ($mdp_up == $mdp2_up) {
    $arrayName = array(
      'nom' => $nom_up ,
      'adrs' => $adrs_up ,
      'mdp' => MD5($mdp_up)
    );
    $model->save($arrayName);
    $session->setFlashdata('message2', 'Successfully added.');
    return redirect()->to('Sign');
  }
  else {
    $session->setFlashdata('message_up', 'The password is not identical.');
    return redirect()->to('Sign_up');
  }
}
  public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('Sign');
    }
}
