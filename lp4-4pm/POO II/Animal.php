<?php
/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 19/09/14
 * Time: 05:25 PM
 */

 abstract class Animal {

     //implementar metodo, la clase que extiende a animal
     abstract function gemir();

     public function estadoAnimal()
     {
        return 'estoy gimiendo '.$this->gemir();
     }
} 