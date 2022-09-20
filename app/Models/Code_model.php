<?php namespace App\Models;

use CodeIgniter\Model;

class Code_model extends Model
{

    public function getCode()
    {
        $builder = $this->db->table("code");
        $builder->select('code.id_code,
        kaominina.nom as kaominina,
        fokontany.nom as fokontany,
        vohitra.nom as vohitra,
        IF(code.laharana_tokan_trano !="", CONCAT(kaominina.codek,"-",fokontany.codefkt, "-",vohitra.codeh, "-",code.laharana_tokan_trano), CONCAT(kaominina.codek,"-",fokontany.codefkt, "-",vohitra.codeh, "-",code.laharana)) as farany,
        code.laharana_tokan_trano,
        code.laharana,
        code.plof,
        code.lot,
        code.mpanao_saisi');
        $builder->join('kaominina', 'kaominina.id = code.kaominina');
        $builder->join('fokontany', 'fokontany.id = code.fokontany');
        $builder->join('vohitra', 'vohitra.id = code.vohitra');
        return $builder->get();
    }

    public function if_existe($codet,$codel)
    {
        $builder = $this->db->table('code');
        $builder->where('code2', $codet);
        $builder->orWhere('code2', $codel);
        $builder->selectcount('code2');
        return $builder->get();
    }

    public function check_data($id_code)
    {
        $builder = $this->db->table('code');
        $builder->where('id_code', $id_code);
        return $builder->get();
    }
    public function saveCode($data1)
    {
        $query = $this->db->table('code')->insert($data1);
        return $query;
    }

    public function tompony_add($nom,$date_n,$lieu_n,$adresse,$tel,$genre,$cin,$date_d_cin,$tao)
    {
      $data = array(
        'anarana_sy_fanampiny' =>  $nom,
        'date_de_naissance' => $date_n ,
        'toerana_nahaterahana' => $lieu_n ,
        'adiresy' =>  $adresse,
        'tel' => $tel ,
        'lahy_sa_vavy' => $genre ,
        'cin' =>  $cin,
        'date_de_delivrance' => $date_d_cin ,
        'toerana_nanomezana' => $tao ,
      );
        $query = $this->db->table('momba_ny_tompo_ny_tany')->insert($data);
        return $query;
    }

    public function updateCode($data2, $id_code)
    {
        $query = $this->db->table('code')->update($data2, ['id_code' => $id_code]);
        return $query;
    }

    public function deleteCode($id_code)
    {
      $query = $this->db->table('code')->delete(array('id_code' => $id_code));
      return $query;
    }

    #kaominina
    public function getKaominina()
    {
        $builder = $this->db->table('kaominina');
        $builder->orderBy('nom', 'ASC');
        $builder->where('nom !=', '');
        return $builder->get();
    }
    #fokontany
    public function liste_fkt($id)
		{
       $query = $this->db->table('fokontany')->where('codek', $id);
       $query->orderBy('nom', 'ASC');
       $valiny=$query->get();
       $output = '<option value="">- Misafidy -</option>';
        foreach ($valiny->getResult() as $row) {
            $output .=  '<option value="' . $row->id . '" >' . $row->codefkt . '-' . $row->nom . '</option>';
        }
        return $output;
		}

#vohitra
		function liste_vhtr($codefkt, $codek)
		{
      $query = $this->db->table('vohitra')->where('codefkt', $codefkt)->where('codek', $codek);
      $query->orderBy('nom', 'ASC');
      $valiny=$query->get();
      $output = '<option value="">- Misafidy -</option>';
			foreach ($valiny->getResult() as $row)
			{
				$output .= '<option value="' . $row->id . '">'. $row->codeh . '-' . $row->nom . '</option>';
			}
			return $output;
		}
}
