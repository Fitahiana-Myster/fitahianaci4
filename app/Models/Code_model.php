<?php namespace App\Models;

use CodeIgniter\Model;

class Code_model extends Model
{

    public function getCode()
    {
        $builder = $this->db->table('code');
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
        return $builder->get();
    }
    #fokontany
    public function liste_fkt($codek)
		{
       $query = $this->db->table('fokontany')->where('codek', $codek);
       $valiny=$query->get();
       $output = '<option value="">- Misafidy -</option>';
        foreach ($valiny->getResult() as $row) {
            $output .=  '<option value="' . $row->codefkt . '">' . $row->codefkt . '-' . $row->nom . '</option>';
        }
        return $output;
		}

#vohitra
		function liste_vhtr($codefkt, $codek)
		{
      $query = $this->db->table('hameau')->where('codefkt', $codefkt)->where('codek', $codek);
      $valiny=$query->get();
      $output = '<option value="">- Misafidy -</option>';
			foreach ($valiny->getResult() as $row)
			{
				$output .= '<option value="' . $row->codeh . '">'. $row->codeh . '-' . $row->nom . '</option>';
			}
			return $output;
		}
}
