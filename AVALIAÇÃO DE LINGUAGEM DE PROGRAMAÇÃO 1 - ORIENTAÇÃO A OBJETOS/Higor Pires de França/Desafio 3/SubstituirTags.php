<?php 

class SubstituirTags{
    public function __construct($texto)
    {
        $Testes = $this->VerificarTestes($texto);
        if(count($Testes > 0)){
            $this->VerificarLinhas($Testes);
            $this->Conversao($Testes);
            $this->Exibicao($Testes);
        }else{
            print_r('<br>Nenhum teste apto<br>');
        }
        
    }
    private function VerificarTestes($texto){
        $array = explode(PHP_EOL, $texto);
        $Testes = array();

        if(count($array)%3 == 0){
            for($i = 0;$i<count($array);$i+=3){
                $param1 = explode("<br />",$array[$i]);
                $param2 = explode("<br />",$array[$i+1]);
                $param3 = explode("<br />",$array[$i+2]);

                array_push($Testes, new Teste($param1[0],$param2[0],$param3[0]));
            }
        }elseif(count($array)>3){
            for($i = 0;$i<count($array) - (count($array)%3);$i+=3){
                array_push($Testes, new Teste($array[$i],$array[$i+1],$array[$i+2]));
            }
            print_r('<br>Ultimo teste contem '.(count($array)%3).' linhas, logo foi desconsiderado<br>');
        }else{
            print_r('<br>Os testes precisam ter 3 linhas<br>');
        }
    
        return $Testes;
        
    }
    private function VerificarLinhas($Testes){
        for ($i = 0;$i < count($Testes);$i++) {
            $regex = "/[^a-zA-Z]/mi";
            if(preg_match($regex, $Testes[$i]->getLinha1()) == 0 && strlen($Testes[$i]->getLinha1()) >= 1 && strlen($Testes[$i]->getLinha1()) <= 10){
                $regex = "/[^0-9]/mi";
                if(preg_match($regex, $Testes[$i]->getLinha2()) == 0 && intval($Testes[$i]->getLinha2()) >=1 && intval($Testes[$i]->getLinha2()) <=1000){
                    $regex = "/[^a-zA-Z0-9<>=\/\ ]/mi";
                    if(preg_match($regex, $Testes[$i]->getLinha3(), $matches) == 1  || strlen($Testes[$i]->getLinha1()) < 1 || strlen($Testes[$i]->getLinha1()) > 50){
                        $Testes[$i]->setResultado('Linha 3 não contem as especificações corretas');
                    }
                }else{
                    $Testes[$i]->setResultado('Linha 2 não contem as especificações corretas');
                    
                }
            }else{
                $Testes[$i]->setResultado('Linha 1 não contem as especificações corretas');
            }
            
        }
    }
    private function Conversao($Testes){
        foreach($Testes as $teste){
            if(empty($teste->getResultado())){
                $text = $teste->getLinha3();
                preg_match_all('/<[a-zA-Z0-9=\/\ ]*'.$teste->getLinha1().'[a-zA-Z0-9=\/\ ]*>/mi', $text, $matches);
                foreach($matches[0] as $m){
                    $regex = "/".$teste->getLinha1()."/im";
                    $troca = $teste->getLinha2();
                    $troca2 = preg_replace($regex, $troca, $m);
                    $m = preg_replace('/\//mi', '\\/', $m);
                    $regex = '/'.$m.'/mi';
                    $text = preg_replace($regex, $troca2, $text);
                }
                
                $teste->setResultado($text);
            }
        }
    }
    private function Exibicao($Testes){
        
        echo "<table>
        <tr>
            <th id='lin'>Teste</th>
            <th id='lin'>Linha</th>
            <th>Entrada</th>
            <th id='sai'>Saída</th>
        </tr>";
        for($i = 0; $i < count($Testes);$i++){
            echo
        "<tr>
            <th rowspan='3' id='lin' class='high low'>".($i+1)."</th>
            <td id='lin' class='high'>Primeira</td>
            <td class='high'>".$Testes[$i]->getLinha1()."</td>
            <td rowspan='3' id='sai' class='high low'>".htmlspecialchars($Testes[$i]->getResultado())."</td>
        </tr>
        <tr>
            <td id='lin'>Segunda</td>
            <td>".$Testes[$i]->getLinha2()."</td>
        </tr>
        <tr>
            <td id='lin' class='low'>Terceira</td>
            <td class='low'>".htmlspecialchars($Testes[$i]->getLinha3())."</td>
        </tr>";
        }
        echo "</table>";
    }
}