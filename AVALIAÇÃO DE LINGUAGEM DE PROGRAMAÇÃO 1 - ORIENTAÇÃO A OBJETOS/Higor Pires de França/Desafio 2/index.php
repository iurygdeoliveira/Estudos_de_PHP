<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <style>
    table {
        min-width: 800px;
        min-height: 250px;
        border-collapse: collapse;
        border: 2px solid black;
    }

    th,
    td {
        padding: 2px;
        text-align: center;
        border: 1px solid black;
        min-height: 100px;
    }
    </style>
</head>

<body>
    <h1>Desafio 2</h1>
    <?php
        require_once './Pessoa.php';
        require_once './Criminoso.php';
        require_once './Vitima.php';
        require_once './Arma.php';
        require_once './Crime.php';
            
        //Array de Vitimas, Criminosos, Crimes e Armas
        $Criminosos = array();
        $Vitimas = array();
        $Armas = array();
        $Crimes = array();

        
        //Criando Objetos da Classe Criminoso e Vitima e passando para uma array que tem como chave o CPF
        // $Criminosos['CPF'] = new Criminoso('CPF','NOME','ENDEREÇO','TELEFONE');
        $Criminosos['06333334177'] = new Criminoso('06333334177','Pedro Rocha','Cimba','63992145878');
        $Criminosos['03214568749'] = new Criminoso('03214568749','Luiz Carlos','Cimba','63992458796');
        // $Vitimas['CPF'] = new Vitima('CPF','NOME','ENDEREÇO','TELEFONE');
        $Vitimas['02031254788'] = new Vitima('02031254788', 'Higor Pires', 'Av. Guaiba, Araguaina Sul', '639922337469');
        $Vitimas['03265897455'] = new Vitima('03265897455', 'Cris Vitoria', 'Centro', '63992415698');
        //Criando Objetos da Classe Arma e passando para uma array que tem como chave o ID
        // $Armas['ID'] = new Arma('TIPO', 'ID');
        $Armas['00001'] = new Arma('Revolver', '00001');
        $Armas['00002'] = new Arma('Faca', '00002');
        $Armas['00003'] = new Arma('Faca', '00003');

        //Adicionando Objetos da Classe Crime à array que contem todos os crimes (ID está auto_incrementando)
        //Criminosos e Vitimas estão sendo passados a partir do CPF que são as chaves das arrays $$Criminosos e $Vitimas e a Arma está sendo passada a partir do id
        // array_push($Crimes, new Crime(count($Crimes), 'LOCAL', 'DESCRIÇÃO', 'DATA', 'HORA', $Criminosos['CPF'], $Vitimas['CPF'], $Armas['ID']));
        array_push($Crimes, new Crime(count($Crimes), 'Araguaina Sul', 'Assalto a mão armada', '15-02-2020', '15:30', $Criminosos['06333334177'], $Vitimas['02031254788'], $Armas['00001']));
        array_push($Crimes, new Crime(count($Crimes), 'Cimba', 'Tentativa de homicidio', '15-07-2020', '19:30', $Criminosos['03214568749'], $Vitimas['03265897455'], $Armas['00002']));
        array_push($Crimes, new Crime(count($Crimes), 'Centro', 'Roubo', '20-03-2020', '09:50', $Criminosos['03214568749'], $Vitimas['02031254788'], $Armas['00003']));

        function MostrarTodosCrimes($Crimes){
            foreach($Crimes as $crime){
                $crime->MostrarDadosCrime();
            }
        }
        function MostrarTodosCriminosos($Criminosos){
            foreach($Criminosos as $Criminoso){
                $Criminoso->MostrarDados();
            }
        }
        function MostrarTodasVitimas($Vitimas){
            foreach($Vitimas as $Vitima){
                $Vitima->MostrarDados();
            }
        }
        function MostrarTodasArmas($Armas){
            foreach($Armas as $Arma){
                $Arma->MostrarDados();
            }
        }

        /* Mostrar Tudo */
        //MostrarTodosCriminosos($Criminosos);
        //MostrarTodasVitimas($Vitimas);
        //MostrarTodosCrimes($Crimes);
        //MostrarTodasArmas($Armas);

        /* $Vitimas['CPF']-> */
        /* CPF para teste: 02031254788 | 03265897455 */
        //$Vitimas['02031254788']->MostrarDados();
        $Vitimas['02031254788']->CrimesSofridos($Crimes);

        /* $Criminosos['CPF']-> */
        /* CPF para teste: 06333334177 | 03214568749 */
        //$Criminosos['03214568749']->MostrarDados();
        //$Criminosos['06333334177']->CrimesCometidos($Crimes);

        /* $Crimes['ID']-> */
        /* ID para teste: 0 | 1 | 2 */
        //$Crimes['0']->MostrarDadosCrime();

        /* $Armas['ID']-> */
        /* ID para teste: 00001 | 00002 | 00003 */
        //$Armas['00001']->MostrarDados();
?>
</body>

</html>