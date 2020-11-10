<?php

declare(strict_types=1);

namespace classes;

class Texto
{

    private $textoInicial;
    private $textoDividido;
    private $pattern;
    private $replace;
    private $saida;
    private $resultado;
    private $caminho;

    /**
     * Class constructor.
     */
    public function __construct(string $arquivo)
    {
        ini_set("auto_detect_line_endings", "1");
        $this->textoInicial = file_get_contents($arquivo);
        $this->saida = [];
        $this->caminho = $arquivo;
    }

    public function getTexto()
    {
        return $this->textoInicial;
    }

    public function getTextoDividido()
    {
        return $this->textoDividido;
    }

    public function getResultado()
    {
        return $this->resultado;
    }

    public function getReplace()
    {
        return $this->replace;
    }
    public function getSaida()
    {
        return $this->saida;
    }
    public function getPattern()
    {
        return $this->pattern;
    }

    public function view(string $titulo, $propriedade)
    {
        echo "<p class='trigger'> $titulo </p>";
        var_dump($propriedade);
    }

    public function dividirTexto(): array
    {
        $this->textoDividido = [];
        $fp = fopen($this->caminho, "r");

        if ($fp) {

            while (($linha = fgets($fp)) !== false) {
                array_push($this->textoDividido, trim($linha));
            }
            if (!feof($fp)) {
                var_dump("Erro: falha inexperada de fgets()");
            }

            fclose($fp);
        }

        return $this->textoDividido;
    }

    private function extrair(int $count, array $texto): array
    {
        $extracao = [];
        foreach ($texto as $key => $value) {
            if ($key === $count) {
                array_push($extracao, $value);
                $count += 3;
            }
        }

        return $extracao;
    }

    public function extrairPattern(): array
    {
        $this->pattern = $this->extrair(0, $this->textoDividido);
        return $this->pattern;
    }

    public function extrairReplace(): array
    {
        $this->replace = $this->extrair(1, $this->textoDividido);
        return $this->replace;
    }

    public function extrairSaida(): array
    {
        $this->saida = $this->extrair(2, $this->textoDividido);
        return $this->saida;
    }

    public function aplicarReplace(): void
    {
        $this->resultado = [];
        foreach ($this->saida as $key => $value) {
            $resultado = preg_replace("/{$this->pattern[$key]}/m", $this->replace[$key], $value);
            array_push($this->resultado, $resultado);
        }
    }
}