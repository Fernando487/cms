<?php
class Prospecto extends Eloquent {
   public function usuario(){
      return $this->belongsTo('Usuario');
   }

   public function trabajador(){
      return $this->hasMany('Trabajador');
   }
}
?>