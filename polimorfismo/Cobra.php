<?php
require_once 'Reptil.php';
class Cobra extends Reptil{
    public function emitirSom() {
        echo "<p>O animal sibila</p>";
    }
    public function alimentar() {
        echo "<p>O animal se alimenta de pequenos animais, ovos e outros</p>";
    }
}
?>