<?php
require_once 'Aluno.php';
class Bolsista extends Aluno {
    private $bolsa;

    public function RenovarBolsa() {
        echo "<p>Bolsa renovada</p>";
    }

    public function PagarMensalidade() {
        echo "<p>$this->nome é bolsista, portanto, paga com desconto.</p>";
    }

    function getBolsa() {
        return $this -> bolsa;
    }

    function setBolsa($bolsa) {
        $this -> bolsa = $bolsa;
    }
}
?>