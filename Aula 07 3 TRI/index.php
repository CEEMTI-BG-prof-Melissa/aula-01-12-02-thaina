<html>
    <head>
        <title> Aula 07 PHP</title>
    </head>
    <body>
        <?php
            //aula07
            //Thaina
            //08/10/2025

            $num=10;
            echo"Valor inicial : $num";
            
            
            $num+=5;
            echo"<br><br>A soma de 10 mais 5 é : $num";
            

            $num-=2;
            echo"<br>Após subtrair 2 : $num";
            

            $num*=3;
            echo"<br>Após multiplicar por 3 : $num";
            
            $num/=2;
            echo"<br>Após dividir por 2 : $num";
           

            ++$num;
            echo"<br><br>Após Pré-incremento $num";
            echo"<br>Apos Pós-incremento : " .($num++);
           

            --$num;
            echo"<br>Apos Pré-encremento $num";
            echo"<br>Apos Pré-encremento : " .($num--);
            echo"<br><br>Valor final : $num"


        ?>
    </body>
</html>
