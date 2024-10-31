<?php
    namespace PHP\Modelo;
    require_once('Endereco.php');
    use PHP\Modelo\Endereco;

    class Pessoa{

        protected string $cpf;
        protected string $nome;
        protected string $telefone;
        protected Endereco $endereco;

        public function __construct(string $cpf,
                                    string $nome,
                                    string $telefone,
                                    Endereco $endereco

        )

        {

            $this->cpf      = $cpf;
            $this->nome     = $nome;
            $this->telefone =$telefone;
            $this->endereco =$endereco; 

        }//fim do metodo

        public function __get(string $nome)
        {
            return $this->nome;
        }//fim do metodo

        public function __set(string $nomeVariavel, string $dado):void
        {
            $this->nomeVariavel = $dado;
        }//fim do metodo

        public function imprimir():string
        {
            return "<br>CPF:".$this->cpf.
                   "<br>Nome:".$this->nome.
                   "<br>Telefone:".$this->telefone;
                



        }

    
    }//fim da classe

?>

