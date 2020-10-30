<?php

class Passada1{
    var $vetor;
    var $resultadoMovimento;
    var $vetorReverso = array();
    var $guardarResultadoReverso = array();
    var $guardarResultadoReverso2 = array();

    public function quebrarString($texto){
        $this->vetor = str_split($texto); //str_split quebra a String em um vetor de char.
        echo "Vetor do texto inserido<br>";
        print_r($this->vetor);
    }

    public function movimentoASCII(){
        $count = 0; //Contador de posições do vetor
        $arrayASCII = array();
        $somaASC = array();
        $ASCtoChar = array();

        foreach ($this->vetor as $valor){
            $arrayASCII[$count] = ord($valor); //O Array na posição do $count vai converter o char do vetor em um int da ASCII
            $count++;
        }
        echo "Vetor do texto inserido transformado em ASCII<br>";
        print_r($arrayASCII);
        for($i = 0; $i < $count; $i++){
            if($arrayASCII[$i] >= 65 && $arrayASCII[$i] <= 90 || $arrayASCII[$i] >= 97 && $arrayASCII[$i] <= 122){
                $somaASC[$i] = $arrayASCII[$i]+=3;
            } 
            else{
                $somaASC[$i] = $arrayASCII[$i];
            }
        }
        echo "Soma do índice ASCII do vetor inserido +3<br>";
        print_r($somaASC);
        for($j = 0; $j < $count; $j++){
            $ASCtoChar[$j] = chr($somaASC[$j]);
            $this->vetorReverso = $ASCtoChar;
        }
        echo "Retorno do índice ASCII +3 para um vetor de char";
        print_r($ASCtoChar);
    }

    public function passada2(){
        $resultadoReverso = array_reverse($this->vetorReverso);
        echo "Vetor de char na ordem inversa<br>";
        print_r($resultadoReverso);
        $this->guardarResultadoReverso = $resultadoReverso;

        $this->guardarResultadoReverso2 = $this->guardarResultadoReverso; //Guardando resultado em uma variável diferente
    }

    public function passada3(){
        $tamanhoarray = count($this->guardarResultadoReverso);
        echo "Verificação do tamanho e paridade do vetor<br>";
        printf("O tamando do Array é %d", $tamanhoarray);
        if($tamanhoarray%2 == 0){
            $divisaoarray = $tamanhoarray/2;
        } 
        else {
            $divisaoarray = (($tamanhoarray/2)-0.5);
            }
            printf("\nO Array dividido por 2 é %.1f", $divisaoarray);

            $contador = 0;

            /*Foreach que vai percorrer meu vetor com o resultado invertido e armazenar cada
            posição na variável $value2*/
            foreach ($this->guardarResultadoReverso as $value2){
                /*Se o contador que guarda a posiçao do array for menor ou igual ao resultado da
                divisão para verificar a paridade, o vetor na posição do loop vai continuar o mesmo */
                if($contador <= $divisaoarray){
                    $this->guardarResultadoReverso[$contador] = $value2;
                }
                /*Se não, o valor na posição do loop vai ser convertido para ASCII e guardado na
                variável $convertToASCII */
                else {
                    $convertToASCII = ord($value2);
                    $this->guardarResultadoReverso2 = chr($convertToASCII -1);
                }
                echo "Resultado após retirar -1 pela tabela ASCII da metade do vetor para frente<br>"; 
                print_r($this->guardarResultadoReverso2);
            }
    } 

}