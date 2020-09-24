<!DOCTYPE  html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styl1.css">
        <title>Komis Samochodowy</title>
    </head>
    <body>
        <section id="baner">
            <h1>SAMOCHODY</h1>
        </section>
        <section id="pl">
            <h2>Wykaz samochodów</h2>
            <ul>
                <?php
                    $connect = mysqli_connect('localhost', 'root', '', 'komis');
                        $sql = "SELECT id, marka, model FROM `samochody`";
                        $query = mysqli_query($connect, $sql);

                            while($wiersz = mysqli_fetch_row($query)){
                                echo '<li>' . $wiersz[0] . ' ' . $wiersz[1] . ' ' . $wiersz[2] . '</li>';
                            }

                        mysqli_close($connect);
                ?>
            </ul>
            <h2>Zamówienia</h2>
            <ul>
                <?php
                    $connect = mysqli_connect('localhost', 'root', '', 'komis');
                        $sql = "SELECT Samochody_id, Klient FROM `zamowienia`";
                        $query = mysqli_query($connect, $sql);

                            while($wiersz = mysqli_fetch_row($query)){
                                echo '<li>' . $wiersz[0] . ' ' . $wiersz[1] . '</li>';
                            }

                        mysqli_close($connect);
                ?>
            </ul>
        </section>
        <section id="pp">
            <h2>Pełne dane: Fiat</h2>
            <?php
                $connect = mysqli_connect('localhost', 'root', '', 'komis');
                        $sql = 'SELECT * FROM `samochody` WHERE marka = "Fiat"';
                        $query = mysqli_query($connect, $sql);

                            while($wiersz = mysqli_fetch_row($query)){
                                echo '<span>' . $wiersz[0] . ' / ' . $wiersz[1] . ' / ' . $wiersz[2] . ' / ' . $wiersz[3] .  ' / ' . $wiersz[4] .  ' / ' . $wiersz[5] .'</span><br>';
                            }

                        mysqli_close($connect);
            ?>
        </section>
        <section id="stopka">
            <table>
                <tr>
                    <td><a href="kwerendy.txt">Kwerendy</a></td>
                    <td>Autor: 01234567890</td>
                    <td><img src="auto.png" alt="komis samochodowy"></td>
                </tr>
            </table>
        </section>      
    </body>
</html>