<?php
namespace App\Models;

use CodeIgniter\Model;
class mIniciar extends Model{
	protected $table      ='registro';
	protected $primaryKey ='id_usuario';

	protected $useAutoIncrement = true;

	protected $returnType  ='array';
	protected $useSoftDeletes =false;

	protected $allowedFields =[ 
				'correo',
			    'password'];
	                        

	protected $useTimestamps  = false;
	protected $craetedField   = 'created_at';
	protected $updatedField   = 'updated_at';
	protected $deletedField   = 'deleted_at';

	protected $validationRules    = [];
	protected $validationMessages = [];
	protected $skipValidation     = false;
    }

?>

	