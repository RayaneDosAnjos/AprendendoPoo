<?php  
require_once 'Mamifero.php';
class Cachorro extends Mamifero {
    public function emitirSom()
    {
        echo "<p>AU!AU!AU!</p>";
    }
}