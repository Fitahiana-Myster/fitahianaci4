<?php
namespace App\Models;
use CodeIgniter\Model;


class Sign_model extends Model{

  protected $table = 'compte';

    protected $allowedFields = [
        'nom',
        'adrs',
        'mdp'
    ];
}
