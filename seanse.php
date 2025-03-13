<?php
$miasto;
$film;
$godzina;
function cookiereset()
{
    for($i=1;$i<19;$i++)
    {
        setcookie($i, "", time()-3600); //resetuje wszytkie ciasteczka w celu pozniejszego stworzenia potrzebnych nam cisteczek wykorzystywanych w  nastepnych podstronach i funkcjach
    }
}
function sprawdzanie() //sprawdza czy konkrety guzik zostal kliniety wywolujac funkcje 
{
    switch($_POST)
    {
        case array_key_exists('filmy', $_POST):
            filmy();
            break;
        case array_key_exists("film1", $_POST):
            $film = 'Detektyw Bruno';
            $id =1;
            film($id);
            break;
        case array_key_exists('film2', $_POST):
            $film = 'film2';
            $id =2;
            film($id);
            break;
        case array_key_exists('film3', $_POST):
            $film = 'film';
            $id =3;
            film($id);
            break;
        case array_key_exists('film4', $_POST):
            $film = 'film';
            $id =4;
            film($id);
            break;
        case array_key_exists('film5', $_POST):
            $film = 'film';
            $id =5;
            film($id);
            break;
        case array_key_exists('film6', $_POST):
            $film = 'film';
            $id =6;
            film($id);
            break;
        case array_key_exists('film7', $_POST):
            $film = 'film';
            $id =7;
            film($id);
            break; 
        case array_key_exists('film8', $_POST):
            $film = 'film';
            $id =8;
            film($id);
            break;
        case array_key_exists('film9', $_POST):
            $film = 'film';
            $id =9;
            film($id);
            break;
        case array_key_exists('Zabrze', $_POST):
            $miasto = 'Zabrze';
            miasto1();
            break;
        case array_key_exists('Gliwice', $_POST):
            $miasto = 'Gliwice';
            miasto2();
            break;
        case array_key_exists('Katowice', $_POST):
            $miasto = 'Katowice';
            miasto3();
            break;
        case array_key_exists('1',$_POST):
            setcookie("1",$_POST["1"],time()+20*60);
            setcookie("seans","1",time()+1*1*20*60);
            header('Location: sala.php');
            break;
        case array_key_exists('2',$_POST):
            setcookie("2",$_POST["2"],time()+20*60);
            setcookie("seans","2",time()+1*1*20*60);
            header('Location: sala.php');
            break;
        case array_key_exists('3',$_POST):
            setcookie("3",$_POST["3"],time()+20*60);
            setcookie("seans","3",time()+1*1*20*60);
            header('Location: sala.php');
            break;
        case array_key_exists('4',$_POST):
            setcookie("4",$_POST["4"],time()+20*60);
            setcookie("seans","4",time()+1*1*20*60);
            header('Location: sala.php');
                break;
        case array_key_exists('5',$_POST):
            setcookie("5",$_POST["5"],time()+20*60);
            setcookie("seans","5",time()+1*1*20*60);
            header('Location: sala.php');
                break;
        case array_key_exists('6',$_POST):
            setcookie("6",$_POST["6"],time()+20*60);
            setcookie("seans","6",time()+1*1*20*60);
            header('Location: sala.php');
            break;
        case array_key_exists('7',$_POST):
            setcookie("7",$_POST["7"],time()+20*60);
            setcookie("seans","7",time()+1*1*20*60);
            header('Location: sala.php');
            break;
        case array_key_exists('8',$_POST):
            setcookie("8",$_POST["8"],time()+20*60);
            setcookie("seans","8",time()+1*1*20*60);
            header('Location: sala.php');
            break;
            case array_key_exists('9',$_POST):
                setcookie("9",$_POST["9"],time()+20*60);
                setcookie("seans","9",time()+1*1*20*60);
                header('Location: sala.php');
                break;
        case array_key_exists('10',$_POST):
            setcookie("10",$_POST["10"],time()+20*60);
            setcookie("seans","10",time()+1*1*20*60);
            header('Location: sala.php');
            break;
        case array_key_exists('11',$_POST):
            setcookie("11",$_POST["11"],time()+20*60);
            setcookie("seans","11",time()+1*1*20*60);
            header('Location: sala.php');
            break;
        case array_key_exists('12',$_POST):
            setcookie("12",$_POST["12"],time()+20*60);
            setcookie("seans","12",time()+1*1*20*60);
            header('Location: sala.php');
            break;
        case array_key_exists('13',$_POST):
            setcookie("13",$_POST["13"],time()+20*60);
            setcookie("seans","13",time()+1*1*20*60);
            header('Location: sala.php');
                break;
        case array_key_exists('14',$_POST):
            setcookie("14",$_POST["14"],time()+20*60);
            setcookie("seans","14",time()+1*1*20*60);
            header('Location: sala.php');
            break;
        case array_key_exists('15',$_POST):
            setcookie("15",$_POST["15"],time()+20*60);
            setcookie("seans","15",time()+1*1*20*60);
            header('Location: sala.php');
            break;
        case array_key_exists('16',$_POST):
            setcookie("16",$_POST["16"],time()+20*60);
            setcookie("seans","16",time()+1*1*20*60);
            header('Location: sala.php');
            break;
        case array_key_exists('17',$_POST):
            setcookie("17",$_POST["17"],time()+20*60);
            setcookie("seans","17",time()+1*1*20*60);
            header('Location: sala.php');
            break;
        case array_key_exists('18',$_POST):
            setcookie("18",$_POST["18"],time()+20*60);
            setcookie("seans","18",time()+1*1*20    *60);
            header('Location: sala.php');
            break;
        default:
            filmy();
            break;
        
    }
}
function filmy() //wypisuje wszystjie filmy z bazy danych
{
    $conn = new mysqli("localhost","root","","kino2");

    $sql = "SELECT * FROM filmy JOIN miasta ON filmy.id_miasta = miasta.id_miasta";
    $result = $conn->query($sql);
    echo "<div class='filmy'>";
    if ($result) 
    {
        // output data of each row
        while($row = $result->fetch_assoc()) 
        {
        echo "<div class ='echo'>"." || nazwa: " . $row["nazwa"]. " || miasto: " . $row["miasto"]." || "."</div>";

        }
    } 
    else  
    {
        echo "brak filmów";
    }
    $conn->close();
    echo "</div>";

}
//funcjke miast1 - miasto3 wypisuja wszystkie filmy lecaca w tym miescie
function miasto1()
{
    $conn = new mysqli("localhost","root","","kino2");

    $sql = "SELECT * FROM filmy WHERE id_miasta = 1 ";
    $result = $conn->query($sql);
    
    echo "<form method='post' class='seanse'>";
    if ($result) 
    {
        // output data of each row
        while($row = $result->fetch_assoc()) 
        {
            
            echo "<input class='btn btn-primary gap' type ='submit' name='"."film".$row["Id_filmu"]."' value='".$row["nazwa"]. "'>";
        }
    } 
    else  
    {
        echo "brak filmów";
    }
    $conn->close();
    echo "</form>";

}
function miasto2()
{
    $conn = new mysqli("localhost","root","","kino2");

    $sql = "SELECT * FROM filmy WHERE id_miasta = 2";
    $result = $conn->query($sql);
    echo "<form method='post' class='seanse'>";
    if ($result) 
    {
        // output data of each row
        while($row = $result->fetch_assoc()) 
        {
            echo "<input class='btn btn-primary gap' type ='submit' name='"."film".$row["Id_filmu"]."' value='".$row["nazwa"]. "'>";
        }
    } 
    else  
    {
        echo "brak filmów";
    }
    $conn->close();
    echo "</form>";

}
function miasto3()
{
    $conn = new mysqli("localhost","root","","kino2");

    $sql = "SELECT * FROM filmy WHERE id_miasta = 3";
    $result = $conn->query($sql);
    echo "<form method='post' class='seanse'>";
    if ($result) 
    {
        // output data of each row
        while($row = $result->fetch_assoc()) 
        {
            echo "<input class='btn btn-primary gap' type ='submit' name='"."film".$row["Id_filmu"]."' value='".$row["nazwa"]. "'>";
        }
    } 
    else  
    {
        echo "brak filmów";
    }
    $conn->close();
    echo "</form>";
}
function film($idk) //funcja wypisujaca godziny seansow dla wybranego filmu
{
    $conn = new mysqli("localhost","root","","kino2");
    $sql= "SELECT * FROM seanse WHERE id_filmu = $idk";
    $result = $conn->query($sql);
    echo "<form method='post' class='godziny'>";
    if($result)
    {
        while($row = $result->fetch_assoc())
        echo "<input class='btn btn-primary gap' type='submit' name='".$row["id_seansu"]."' value='".$row["godzina"]."'>";
    }
    else
    {
        echo("film nie jest wyswitlany");
    }
    $conn->close();
    echo "</form>";
}
?>

