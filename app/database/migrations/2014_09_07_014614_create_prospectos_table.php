<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProspectosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('prospectos', function($table){
			$table->create();
			$table->increments('id');
			$table->string('nombre');
			$table->string('mail');
			$table->string('direccion');
			$table->string('rfc');
			$table->boolean('factura');
			$table->string('proyecto');
			$table->boolean('cliente');
			$table->string('tiempo');
			$table->decimal('descuento', 5, 2);
			$table->decimal('total', 5, 2);
			$table->boolean('nitificar');
			$table->boolean('proyecto_adjunto');
			$table->string('nombre_adjunto');
			$table->decimal('costo_adjunto', 5, 2);
			$table->integer('trabajador_id');
			$table->integer('usuario_id');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prospectos');
	}

}
