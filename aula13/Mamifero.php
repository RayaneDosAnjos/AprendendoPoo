<?php
require_once 'Animais.php';
class Mamifero extends Animais {
    protected $corPelo;

    public function emitirSom()
    {
        echo "<p>Som de mamífero</p>";
    }

    
}