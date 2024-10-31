<?php
    namespace PHP\Modelo;
    

    class Consulta{

        protected string $tipoConsulta;
        protected string $hora;
        protected string $data;
        

        public function __construct(string $tipoConsulta,
                                    string $hora,
                                    string $data
                                    

        )

        {

            $this->tipoConsulta      = $tipoConsulta;
            $this->hora     = $hora;
            $this->data =$data;
            

        }//fim do metodo

        public function __get(string $tipoConsulta)
        {
            return $this->tipoConsulta;
        }//fim do metodo

        public function __set(string $tipoConsultaVariavel, string $dado):void
        {
            $this->tipoConsultaVariavel = $dado;
        }//fim do metodo

        public function imprimir():string
        {
            return "<br>CPF:".$this->tipoConsulta.
                   "<br>Nome:".$this->hora.
                   "<br>Telefone:".$this->data;
                   
                



        }

    
    }//fim da classe

?>