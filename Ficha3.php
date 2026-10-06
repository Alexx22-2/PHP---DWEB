<?php
class Pessoa{
    private $idade;
    private $nome;

public function apresentrar(){
    echo "Olá, meu nome é " . $this->nome . " e tenho " . $this->idade . " anos. <br>";
}
public function __construct($idade,$nome){
        $this->idade=$idade;
        $this->nome=$nome;
}
}
$pessoa1 = new Pessoa(20,"João");
$pessoa1->apresentrar();
$pessoa2 = new Pessoa(30,"Maria");
$pessoa2->apresentrar();

echo "<br> Exercicio 2 <br>";
class Retangulo{
    private $largura;
    private $altura;

public function __construct($largura,$altura){
    $this->largura=$largura;
    $this->altura=$altura;
}
public function area(){
    return $this->largura * $this->altura;
}
public function perimetro(){
    return 2 * ($this->largura + $this->altura);
}
}
$retangulo1 = new Retangulo(5,10);
echo "Área do retângulo: " . $retangulo1->area() . "<br>";
echo "Perímetro do retângulo: " . $retangulo1->perimetro() . "<br>";

echo "<br> Exercicio 3 <br>";
class Aluno{
    private $nome;
    private $numero;
    private $nota1;
    private $nota2;
    private $nota3;

public function __construct($nome,$numero,$nota1,$nota2,$nota3){
    $this->nome=$nome;
    $this->numero=$numero;
    $this->nota1=$nota1;
    $this->nota2=$nota2;
    $this->nota3=$nota3;
}
public function media(){
    return ($this->nota1 + $this->nota2 + $this->nota3) / 3;
}

public function aprovado(){
    if($this->media() >= 10){
        return "Aprovado";
    }else{
        return "Reprovado";
    }
}
}
$aluno1 = new Aluno("Pedro",123,12,14,16);
echo "Média do aluno: " . $aluno1->media() . "<br>";
echo "Situação do aluno: " . $aluno1->aprovado() . "<br>";
$aluno2 = new Aluno("Ana",456,8,9,7);
echo "Média do aluno: " . $aluno2->media() . "<br>";
echo "Situação do aluno: " . $aluno2->aprovado() . "<br>";
$aluno3 = new Aluno("Lucas",789,10,11,12);
echo "Média do aluno: " . $aluno3->media() . "<br>";
echo "Situação do aluno: " . $aluno3->aprovado() . "<br>";
?>