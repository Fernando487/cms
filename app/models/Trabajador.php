<?php
class Trabajador extends Eloquent {
	return $this->hasMany('Prospectos');
}
?>