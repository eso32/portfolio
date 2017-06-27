<?php

     session_start(); //pozwala dokumentowi na korzystanie z sesji

     if( (!isset($_POST['login'])) || (!isset($_POST['haslo'])) )
     {
          header('Location: index.php');
          exit();
     }

     require_once "connect.php"; //po prostu wkleje tutaj zawartość pliku connect.php

     $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name); // ustanowienie instancji klasy mysqli()

     if ($polaczenie->connect_errno!=0)
     {
          echo "Error: ".$polaczenie->connect_errno;
     }
     else
     {
          echo "Success ".$polaczenie->connect_errno;
          $login = $_POST['login'];  //name="login"
          $haslo= $_POST['haslo'];
          $sql = "SELECT * FROM uzytkownicy WHERE user='$login' AND pass='$haslo'";

          if ($rezultat = @$polaczenie->query($sql))
          { //zabezpieczenie na literówkę w kwerendzie
            $ilu_userow = $rezultat->num_rows;
            if($ilu_userow>0)
            {
                echo "User found: ".$ilu_userow;
                $_SESSION['zalogowany'] = true; //jeśli przejdziemy do index php to tym sprawdzimy czy jestesmy zalogowani

                $wiersz = $rezultat->fetch_assoc(); //pobierz wszystkie wartości z wyciągniętego wiersza
                $_SESSION['id'] = $wiersz['id'];
                $_SESSION['user'] = $wiersz['user'];
                $_SESSION['email'] = $wiersz['email'];

                unset($_SESSION['blad']); //kasuje (jesli jest) zmienną
                $rezultat->free(); //również może być close() lub free_result(); - czyści już nie potrzebne dane z pamięci
                header('Location: gra.php');
            } else {
                echo " No such a user";
                $_SESSION['blad'] = '<span style="color: red;">Nieprawidłowy login lub hasło!</span>';
                 header('Location: index.php'); //przekierowanie bo nie udało się zalogować
            }

        }
        $polaczenie->close();
      }

?>
