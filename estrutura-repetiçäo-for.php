<?php
// estrutura basica

for ($i = 0; $i <= 10; $i++){

 echo $i . "<br>";

}

//essa estrutura cria um contador que no primeiro ; ele recebe a variavel i com o valor 0
//no segundo ; ele limita como se falasse " ate onde ele vai" e no terceiro ; ele esta falando 
// encremete x, no caso a cima o poerador ++ diz some 1

echo "<br>";


for ($i = 0; $i <= 1000; $i+=5){

    echo $i . "<br>";
   
}
 
// no exemplo a cima ele poe o laço de repeticao ate 1000 pulando de 5 em 5


for ($i = 0; $i <= 5000; $i+=50){

    if ($i >= 2000 && $i <= 4000) continue;

    if ($i === 4500) break;

    echo $i . "<br>";
   
}

//ate 5000 pulando de 50 em 50, o primeiro if esta criando uma lacuna nos numeros onde,
//de 2000 até 4000 os numeros nao aparecem, no for esta falando que vai ate 5000 a estrutura
//porem o segundo if esta dizendo quando chegar a 4500 parar











?>