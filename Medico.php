<?php
    namespace PHP\Modelo;
    require_once('Pessoa.php');
    require_once('Endereco.php');
    require_once('Medico.php');
    use PHP\Modelo\Pessoa;
    use PHP\Modelo\Endereco;
    use PHP\Modelo\Medico;

    class Medico extends Pessoa{

        protected string $cargo;
        protected float $salario;
        protected string $crm;

        public function __construct(string $cpf,string $nome, string $telefone, string $cargo, float $salario,Endereco $endereco, string $crm

        )

        {
            parent:: __construct($cpf,$nome,$telefone,$endereco,$crm);
            $this->cargo = $cargo;
            $this->salario = $salario;
            $this->crm = $crm;


        }//fim do construtor

        public function __get(string $nome):mixed
        {
            return $this->nome;
        }//fim do metodo

        public function __set(string $nomeVariavel, string $dado):void

        {
            $this->nomeVariavel = $dado;
        }//fim do set

        public function imprimir():string

        {
            return parent::imprimir().
                "<br>Cargo:".$this->cargo.
                "<br>Salario:".$this->salario.
                "<br>crm:".$this->crm;
        }


    }//fim da classe


?>