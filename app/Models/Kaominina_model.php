<?php

//CountryModel.php

namespace App\Models;

use CodeIgniter\Model;

class Kaominina_model extends Model{

	protected $table = 'kaominina';

	protected $primaryKey = 'id_kaominina';

	protected $allowedFields = ['nom'];

}

?>
