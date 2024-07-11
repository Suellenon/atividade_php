 <?php
    //Q1
    $NOME = 'Maria';
    echo $NOME . "<br>";
    echo strtoupper($NOME) . "<br>";  // tudo em maiuscula
    
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
  
    //Q4
     $numero1 = 0; 
     $numero2 =0 ;   

    if($numero1 > $numero2){  
        echo "$numero1 é maior que $numero2";}
    elseif($numero1 < $numero2){
       echo "$numero1 é menor que $numero2";}
    else
       echo "$numero1 e $numero2 são iguais" . "<br>";
    
    
    
    
    //Q5
    $palavra ="celular";



   if (str_contains($palavra,"a")== 1 && str_contains($palavra,"o")==1){
    echo "Contém as letras";
   }
   else{
    echo "Não contém";
   }

   echo "<br>";
  
    
    
    //Q6
    



//     //07

   
     

    

  





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
     //10
    // //Q11
    // $valor=10
//     $arrayPares=[];
//     function pares($valor){
//         for(i = 0 ; i<= $valor;i++){
//             if(i % $valor = 0){
//                 $arrayPares_push[i];
//             }
//         }
//     }
//      echo pares(10);
// echo $arrayPares;
    
?>