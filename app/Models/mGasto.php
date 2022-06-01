<?php
namespace App\Models;
use CodeIgniter\Model;
class mUsuarios extends Model{
	protected $table      ='gastos';
	protected $primaryKey ='id_gasto';

	protected $useAutoIncrement = true;

	protected $returnType  ='array';
	protected $useSoftDeletes =false;

	protected $allowedFields =['descripcion',
	                           'fecha',
	                           'cantidad', 
	                           'precio',
	                           'subtotal',
	                           'categoria'];

	protected $useTimestamps  = false;
	protected $craetedField   = 'created_at';
	protected $updatedField   = 'updated_at';
	protected $deletedField   = 'deleted_at';

	protected $validationRules    = [];
	protected $validationMessages = [];
	protected $skipValidation     = false;
    }

?>