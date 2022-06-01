<?php

namespace App\Controllers;
use App\Models\mUsuarios;
use App\Models\mIniciar;
use App\Models\mGasto;


class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	public function bienvenida()
	{
		return view('vBienvenida');
	}
	/*public function mostrar()
	{
		return view('vMostrar');
	}*/
	public function mostrarCompras()
	{
		return view('MostrarCompras');
	}
	public function registro()
	{
		return view('vRegistro');
	}
	public function gasto()
	{
		return view('vGasto');
	}
	public function iniciar()
	{
		return view('vIniciarSesion');
	}
	/*login iniciarsesion*/
	public function iniciarSesion(){
		$mIniciar = new mIniciar();
		$iniciarSesion=[
			"correo"    => $_POST['correo'],
			"password"  => $_POST['password']
		];
		$mIniciar->insert($iniciarSesion);
		$datoId['idRegistrado']= $mIniciar->db->insertID();

		return view("vBienvenida", $datoId);
	}
	/*Insertar registros*/
	public function insertarRegistro()
	{
		$mUsuarios = new mUsuarios();
		$usuarioNuevo=[
			"nombre"    => $_POST['nombre'],
			"apellido"  => $_POST['apellido'],
			"correo"    => $_POST['correo'],
			"password"  => $_POST['password']
		];
		$mUsuarios->insert($usuarioNuevo);
		$datoId['idRegistrado']= $mUsuarios->db->insertID();

		return view("vSucess", $datoId);
		
	}
	/*Insertar registros*/
	public function insertarGasto()
	{
		$mGasto = new mGasto();
		$gastoNuevo=[
			"descripcion" => $_POST['descripcion'],
			"fecha"       => $_POST['fecha'],
			"cantidad"    => $_POST['cantidad'],
			"precio"      => $_POST['precio'],
			"subtotal"    => $_POST['subtotal'],			
			"categoria"   => $_POST['categoria']
		];
		$mGasto->insert($gastoNuevo);
		$datoId['idRegistrado']= $mGasto->db->insertID();

		return view("vSucess", $datoId);
		//print_r($_POST);
	}
	//mostrar
	public function mostrar(){
		$mUsuarios = new mUsuarios();
		$todos=$mUsuarios->findAll();
		$usuarios=array('usuarios'=>$todos);

		return view("vMostrar",$usuarios);
	}
	public function mostrarCompra(){
		$mGasto= new mGasto();
		$todos=$mGasto->findAll();
		$compra=array('compra'=>$todos);

		return view('MostrarCompras',$compra);
	}
	//buscar
	public function buscarGasto(){
		$mGasto = new mGasto();
		$id_gasto = $_POST['id_gasto'];
		$comprar=$mGasto->find($id_gasto);
		return view("vRegistroEncontradoU",$comprar);
	}

	public function encontrar(){
		return view('vRegistroEncontradoU');
	}
/*
	public function buscarRegistro(){
		$mUsuarios = new mUsuarios();
		$id_usuario = S$_POST['id_usuario'];
		$usuario=$mUsuarios->find($id_usuario);
		return view("vRegistroEncontrado",$usuario);
	}

	/*INICIO DE FUNCIONES PARA ACTUALIZar*/
	public function actualizarRegistro(){
		$mUsuarios= new mUsuarios();
		$id_usuario = $_POST['id_usuario'];
		$usuarioActualizado=[ "nombre"   =>$_POST['nombre'],
			                  "apellido" =>$_POST['apellido'],
		                      "correo"   => $_POST['correo'],
		                      "password" => $_POST['password']
		                    ];
		$mUsuarios->update($id_usuario, $usuarioActualizado);
		return view("vS");
		//return $this->mostrar();
		//$usuario=$mUsuarios->find($id_usuario);
		//return view("vS");
	}
	/*
	public function actualizarGasto(){
		$mGasto= new mGasto();
		$id_gasto = $_POST['id_gasto'];
		$compraActualizada=[ 
			                "descripcion" => $_POST['descripcion'],
			                "fecha"       => $_POST['fecha'],
			                "cantidad"    => $_POST['cantidad'],
			                "precio"      => $_POST['precio'],
			                "subtotal"    => $_POST['subtotal'],			
			                "categoria"   => $_POST['categoria']
		                    ];
		$mGasto->update($id_gasto, $compraActualizada);
		return view("vS");
	}*/
	public function eliminar(){
		return view("vEliminado");
	}
	

}
