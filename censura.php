<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>anima di drast</title>
</head>
<body>
    <h1>ciao</h1>

        <div>
            <?php
            $parolacce = ['swag', 'swagghissimo'];

            function censura($contanitoreTesto, $parolacce)
            {
                foreach ($parolacce as $parolaccia) {
                    $contanitoreTesto = str_ireplace($parolaccia, '***', $contanitoreTesto);
                }
                return $contanitoreTesto;
            }

            $nome = ($_POST['nome']);
            $cognome = ($_POST['cognome']);

            $nome = censura($nome, $parolacce);
            $cognome = censura($cognome, $parolacce);

            echo "<div>Nome: " . $nome . "</div>";
            echo "<div>ognome: " . $cognome . "</div>";
            ?>
        </div>
</body>
</html>

