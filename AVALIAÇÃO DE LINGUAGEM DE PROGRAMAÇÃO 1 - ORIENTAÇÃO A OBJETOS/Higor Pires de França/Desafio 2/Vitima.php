<?php
class Vitima extends Pessoa{
    public function CrimesSofridos($Crimes){
        echo '<table> <caption>Vitima: '.$this->nome.'</caption>
        <tr><th colspan="6">Crimes Sofridos</th></tr>
        <tr><th>Data</th><th>Hora</th><th>Local</th><th>Descrição</th><th>Arma</th><th>Criminoso</th></tr>';
        foreach($Crimes as $crime){
            if($crime->CompareVitima($this)){
                echo '<tr>
                    <td>'.htmlspecialchars($crime->getData()).'</td>
                    <td>'.htmlspecialchars($crime->getHora()).'</td>
                    <td>'.htmlspecialchars($crime->getLocal()).'</td>
                    <td>'.htmlspecialchars($crime->getDescricao()).'</td>
                    <td>'.htmlspecialchars($crime->getArma()->getTipo()).'</td>
                    <td>'.htmlspecialchars($crime->getNomeCriminoso()).'</td>
                    </tr>';
            }
        }
        echo '</table>';
    }
}