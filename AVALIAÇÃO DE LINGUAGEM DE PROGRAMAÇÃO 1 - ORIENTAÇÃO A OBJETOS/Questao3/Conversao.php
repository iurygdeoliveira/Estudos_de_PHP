<?php
// JHESSIK KAELLY BEZERRA LEAL
class Conversao{
    private $texto;
    private $tag;
    private $num;
    // construtor e get/set
    
    public function __construct($tag,$num,$texto)
    {
        $this->setTag($tag);
        $this->setTexto($texto);
        $this->setNum($num);
    }
    public function setTexto($texto): void {
        $this->texto = $texto;
    }
    public function getTexto() {
        return $this->texto;
    }
    public function setTag($tag): void {
        $this->tag = $tag;
    }
    public function getTag() {
        return $this->tag;
    }
    public function setNum($num): void {
        $this->num = $num;
    }
    public function getNum() {
        return $this->num;
    }

    //metodo
    public function converterTags(){
       // variaveis
        $txt= str_split($this->texto);//tranforma uma string em um txt
        $contFim=0;// conta o numero de ">"
        $contInicio=0;// conta o nmero de "<"
        $inicio=0;// variavel para comparar se "<" vem primeiro que o ">"
        $fim=strlen($this->texto);// variavel para comparar se ">" vem depois que o "<"
      //------------------------------------------------------------------------
        if(($this->tag!=null )&&( $this->num!=0)&& ($this->texto!=null)){// verifica se nenhum deles esta sem valor
            if(ctype_alpha ($this->tag)&& is_numeric ($this->num)){// verifica se a $tag é somente letras e se $num é somente numero
                for($n=0;$n<count(  $txt);$n++){
                    if($inicio<$fim){// verifica se o "<" vem primeiro que o ">"
                        if(strchr(  $txt[$n],"<")){// compara os caracteres
                            $inicio=$n;// variavel recebe  a posição da variavel que é igual a <
                            $fim=strlen($this->texto);// para o verificador de ">" atribui-se um valor maior para não da erro no if
                            $contInicio++;
                        }elseif(strchr(  $txt[$n],">")){// compara os caracteres
                            $fim=$n;// variavel recebe o valor da posiçao em que o caractere > foi encontrado
                            $contFim++; 
                        }
                       
                    }// FIM DO TERCEIRO IF
                }// FIM DO FOR 
                if($contFim==$contInicio ){    // VERIFICA SE HÁ A MESMA QUANTIDADE DE < E >               
                    return str_ireplace($this->tag,$this->num,$this->texto);// troca a tag pelo numero no texto 
                }else{
                    return "Tags invalidas";
                }
               
            }// FIM DO SEGUNDO IF
                   
        }// FIM DO PRIMEIRO IF
         //-----------------------------------------------------------------------     
    }// FIM DA FUNÇÃO    
     
}

