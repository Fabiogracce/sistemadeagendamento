<?php
    namespace PHP\Modelo;//definir local do projeto
    require_once('Consulta.php');//requisitando uma classe
    require_once('Endereco.php');
    require_once('Medico.php');
    require_once('Paciente.php');
    require_once('Pessoa.php');
    require_once('Recepcionista.php');
    use PHP\Modelo\Consulta;//define a classe 
    use PHP\Modelo\Endereco;
    use PHP\Modelo\Medico;
    use PHP\Modelo\Paciente;
    use PHP\Modelo\Pessoa;
    use PHP\Modelo\Recepcionita;

    $endereco = new Endereco("Avenida senador vergueiro","400","centro","sbc","Sp","brasil","03756-080");

    $paciente = new Paciente("12345","fabio","11975371325",$endereco,560,60);//criar um objeto
    $pacienteDois = new Paciente("12","joao","1325",$endereco, 1020,25,"carterinha");//criar um objeto
    $recepcionista = new Recepcionista("1","buganza","696","Assitente", 1200,$endereco);//criar um objeto
    

    echo $paciente->imprimir();
    echo $endereco->imprimir()."<br>";

    echo $pacienteDois->imprimir();
    echo $endereco->imprimir()."<br>";
    
    echo $recepcionista->imprimir();


?>