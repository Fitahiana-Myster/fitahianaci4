<?php

//StateModel.php

namespace App\Models;

use CodeIgniter\Model;

class Fokontany_model extends Model{

	protected $table = 'fokontany';

	protected $primaryKey = 'id_fokontany';

	protected $allowedFields = ['id_kaominina', 'nom'];

}

?>
