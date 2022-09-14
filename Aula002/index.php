<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCC - Sistema de Calculo de Combustivel</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>
            SCC - Sistema de Cálculo de Combustivel
        </h1>
    </header>
    <section>
        <p>
            Combustiveis dispoiniveis
        </p>
        <ul>
            <li>Etanol</li>
            <li>Diesel</li>
            <li>Gasolina</li>
        </ul>
        <fieldset>
            <legend>Dados</legend>
            <form action="calcular.php" method="post">
            <div>
                <label for="txtname">Nome</label>
                <input type="text" name="txtname" id="" required>
            </div>
            <div>
                <label for="txtveic">Veículo</label>
                <input type="text" name="txtveic" id="" required>
            </div>
            <div>
                <label for="txtdist">Distancia(KM)</label>
                <input type="number" name="txtdist" id="" required>
            </div>
            <div>
                <label for="">Autonomia(KM/L)</label>
                <input type="number" name="txtauto" id="" required>
            </div>
            <input type="submit" value="Calcular">
            <input type="reset" value="Cancelar">
            </form>
        </fieldset>
    </section>
    <footer>Desenvolvido por Wellison Silva</footer>

</body>

</html>