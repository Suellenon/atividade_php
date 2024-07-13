  <?php
    //Q1
    $NOME = 'Maria';
    echo $NOME . "<br>";
    echo strtoupper($NOME) . "<br>";  // tudo em maiuscula
    echo strtolower($NOME)  ."<br>";
    //Q2
    $nome = 'João';
    $idade = 34;
    $endereco= 'São Luis';
    $curso = 'barbeiro';
    
    echo "Olá eu sou $nome , tenho $idade anos, moro em $endereco  e faço curso de $curso no Senac ". "<br>";
    
    //Q3
     $valor1= 10;
     $valor2=5;
     $soma= $valor1 + $valor2;
     $sub =$valor1 - $valor2;
     $mul= $valor1 * $valor2;
     $div= $valor1 / $valor2;
     echo "A soma de $valor1 + $valor2 é $soma". "<br>";
     echo "A subtração de $valor1 - $valor2 é $sub". "<br>";
     echo "A multiplicação de $valor1 * $valor2 é $mul". "<br>";
     echo "A divisão de $valor1 : $valor2 é $div". "<br>";
     //respostaprof
     $x= 4;
     $y= 5;
     echo "a soma de $x e $y é : " . $x + $y ;
     echo "<br>";
     echo "a subtração de $x e $y é : " . $x - $y ;
     echo "<br>";
     echo "a multiplicação de $x e $y é : " . $x * $y ;
     echo "<br>";echo "a soma de $x e $y é : " . $x + $y ;
     echo "<br>";
     echo "a divisão de $x e $y é : " . $x / $y ;
     echo "<br>";
  
    //Q4
     $numero1 = 0; 
     $numero2 =0 ;   

    if($numero1 > $numero2){  
        echo "$numero1 é maior que $numero2";}
    elseif($numero1 < $numero2){
       echo "$numero1 é menor que $numero2";}
    else
       echo "$numero1 e $numero2 são iguais" . "<br>";
    //respostaprof
    function comparativo($a,$b){
        if($a > $b){
            echo "$a é maior que $b";
            echo "<br>";
        }elseif($a <$b){
            echo "$a é menor que $b";
            echo "<br>";
        }else{
            echo "$a é igual a $b";
            echo"<br>";
        }
    }comparativo($x,$y);  // usou a variavel do exercicio 3
    
    
    
    //Q5
    $palavra ="bla";



//    if (str_contains($palavra,"a") == 1 && str_contains($palavra,"o") == 1 ){
//     echo "Contém as letras";
//    }
//    else{
//     echo "Não contém";
//    }

//    echo "<br>";
  
     echo (str_contains($palavra, "a")  && str_contains($palavra, "o")  ) ? "Contêm as letras" : "Não contêm as letras". "<br>";


    // respostaprof
    function verificarLetras($texto){
        if(str_contains($texto, 'a')&& str_contains($texto,'o')){
            echo "Contem";
            echo"<br>";
        }else{
            echo "Não contem";
            echo"<br>";
        }
    }    verificarLetras("alo");
    
    //Q6
    function retornaSi($algo){
        return $algo;
    }
     echo retornaSi('oi');
     echo "<br>";


//     //07
function verificaSenha($senha){
    $temMinuscula = false;
    $temMaiuscula = false; 
    $temNumero = false;
    $senha = str_split($senha);
    if(count($senha)< 8){
        echo "Menor que 8 caracteres <br>";
        return false;
    }
    foreach($senha as $caracteres){
        if (ctype_upper($caracteres)){
            $temMaiuscula =true;

        }
        if(ctype_lower($caracteres)){
            $temMinuscula = true;
        }
   if(ctype_digit($caracteres)){
        $temNumero = true;
    }

}if ($temMaiuscula && $temMinuscula && $temNumero){
    return true;
} 
}
if(verificaSenha('4sdfGhjk')){
    echo "Valida <br>";
}else{
    echo "Invalida <br>";
}

   
     

    

  





    //08
    echo "<br>";
    $idade=12;
    echo ($idade >= 18) ? "Maior de idade": "Menor de idade";
   
    echo "<br>";
    //Q9
    $alunos = array(
        'Junior'=>9.5,
        'Maria'=> 10,
        'Paulo'=>6,
        'Ana'=>8.5,
        'Pedro'=>5,5,
        'Julia'=>6,5

    );
    foreach($alunos as $nome => $notas){
         if($notas >= 7){
           
             echo "$nome = $notas ". "<br>";

         }
      }
      foreach($alunos as $aluno =>$nota){
        if($nota >= 7){
            echo "$aluno <br>";
        }
      }
     //10
 function areaCirculo($raio){
    return pi()* ($raio *$raio);
 }
echo round(areaCirculo(4),2);
echo "<br>";




    //Q11
function geraArray($termo){
    $arrayPares = array ();
    for($i = 0; $i<= $termo; $i++){
        if($i % 2 == 0){
            array_push($arrayPares,$i);
        }
    }return $arrayPares;
}
echo "<pre>";
var_dump(geraArray(10));
echo "<pre>";

//Q12
function seculo($ano){
    return ceil($ano/100);
}
echo "1950 é do século: ". seculo(1950) . "<br>"; // 1950/100 = 19.5 arredonda pra cima 20
echo "2005 é do século: " . seculo(2005) . "<br>"; // 2005/100 = 20.05 arredonda pra cima 21
echo "1900 é do século: "  . seculo(1900)  . "<br>"; // 1900 /100 = 19 nao precisa arredondar

//Q13
    echo "<br>";
 function palindromo($nova){
     if(strrev($nova)=== $nova){
        echo "É um palíndromo <br>";
        
     }else{
        echo "Não é um palíndromo <br>";
    }
 }      palindromo("arara");
        palindromo("senac");
        palindromo("ana");
    
?>