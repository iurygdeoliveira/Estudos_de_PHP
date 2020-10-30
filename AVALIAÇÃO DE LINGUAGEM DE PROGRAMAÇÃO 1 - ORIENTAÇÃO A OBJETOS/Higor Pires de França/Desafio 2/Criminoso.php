<?php
class Criminoso extends Pessoa{
    public function CrimesCometidos($Crimes){
        echo '<table> <caption>Criminoso: '.$this->nome.'</caption>
        <tr><th colspan="6">Crimes Cometidos</th></tr>
        <tr><th>ID</th><th>Data</th><th>Hora</th><th>Local</th><th>Descrição</th><th>Arma</th></tr>';
        foreach($Crimes as $crime){
            if($crime->CompareCriminoso($this)){
                echo '<tr>
                    <td>'.htmlspecialchars($crime->getIdentificacao()).'</td>
                    <td>'.htmlspecialchars($crime->getData()).'</td>
                    <td>'.htmlspecialchars($crime->getHora()).'</td>
                    <td>'.htmlspecialchars($crime->getLocal()).'</td>
                    <td>'.htmlspecialchars($crime->getDescricao()).'</td>
                    <td>'.htmlspecialchars($crime->getArma()->getTipo()).'</td>
                    </tr>';
            }
        }
        echo '</table>';
    }
    
}