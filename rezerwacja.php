<?php 



    $nazwa =  $_COOKIE["seans"];   //wartosc ciasteczka do zmiennej odpowiada zapozniejszy wybor id seansu w bazie danych przeslane z poprzdniej strony w  formie zmiennej superglobalnej 


function wybrany_seans()
{
        global $nazwa;
            $conn = new mysqli("localhost","root","","kino2");//polaczenie z baza danych

            $sql = "SELECT * FROM seanse INNER JOIN filmy ON seanse.id_filmu = filmy.id_filmu INNER JOIN miasta ON filmy.id_miasta = miasta.id_miasta WHERE id_seansu = $nazwa";//kwerenda wybierajaca dane wyboru z poprzedniej strony)
            $result = $conn->query($sql); //wykonanie zapytania
            echo "<div class='filmy'>";
            if ($result) 
            {
                
                //jezeli wynik = true wypisuje konkretne dane z kazdego rzedu $row[nazwa kolumny]
                while($row = $result->fetch_assoc()) 
                {
                echo "<div class ='echo'>"." || film: " . $row["nazwa"]. " || godzina: " . $row["godzina"]." || "." Sala: ".$row["id_sali"]." || "." miasto: ".$row["miasto"]."</div>";
                }
            } 
            else  
            {
                echo "brak filmów";
            }
            $conn->close();//zamkniecei polaczenia z baza danych
            echo "</div>";
} 
function sala($nazwa) //spradza dane sali
{
    $conn = new mysqli("localhost","root","","kino2");

    $sql = "SELECT * FROM seanse WHERE id_seansu = $nazwa";
    $result = $conn->query($sql);  
    while($row = $result->fetch_assoc()) 
    {
        $sala = $row["id_sali"];
        
    }
    return $sala;
}
$ktorasala = sala($nazwa);
view();
function view() //tworzy dabea o id seanuu jejzeli ta nie istenieje pozwala to na stworzenie wielu sal i rezerwacji  w jednej podstronie
{
    global $nazwa;
    $conn = new mysqli("localhost","root","","kino2");
    $sql ="SHOW TABLES LIKE '".$nazwa."'";
    $result = $conn->query($sql); 
    if($result->num_rows == 0) 
    {
        // echo "Table does not exist";
        $sql2 = "CREATE TABLE `$nazwa` AS SELECT id_miejsca,rzad,numer,typ,cena,stan FROM `miejsca`;";
       
        $result = $conn->query($sql2); 
    }
    
    else 
    {
        // echo "Table exists";   
    }   


}
function zaj()// fynkcja odpowiadajaca za atrybuty miejsc zajetych, sprawdza ktore miejsca sa zajete a nastepnie zmienia ich atrybuty
{
    global $nazwa;
    $conn = new mysqli("localhost","root","","kino2");
    $sql ="SELECT * from `$nazwa` WHERE stan = 'zajete';";
    $result = $conn->query($sql);
        $conn = new mysqli("localhost","root","","kino2");
        global $nazwa;
        $sql = "SELECT * FROM `$nazwa`";
        $result = $conn->query($sql);
        if ($result) 
        {
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
                if($row['stan'] == "zajete")
                {
                    echo($row["id_miejsca"]); 
                    echo"

                    zaje = document.getElementById('".$row["id_miejsca"]."');
                    zaje.classList.add('zajete');
                    zaje.classList.remove('miejsce');
                    ";
                }
                     
            }
        } 

}
$Stan_Miejsca = 'miejsce';
$numer_siedzenia =1;
while($numer_siedzenia !=10)//liczenie do js
{
    $numer_siedzenia++;
}
function koniec()
{
    echo"alert('endo')";
}

if(array_key_exists('rezerwuj', $_POST))//jezeli wcisnieto guzik o name = rezeewuj wykonuje funkcje ktora przenosi do podsumowania
{
    lista();
}
function lista()
{
    echo"<script>location.replace('podsumowanie.php')</script>";
   
    echo $_COOKIE["1"];
}

?>