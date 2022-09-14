<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>
<body>
    <section>
        <fieldset>
            <form action="exe10.php" method="post">
                <div>
                    <label for="">Digite seu nome</label>
                    <input type="text" name="txtn" id="">
                </div>
                <div>
                    <label for="">Digite o valor do investimento</label>
                    <input type="number" name="txtv" id="">
                </div>
                <div>
                    <label for="">Poupança</label>
                    <input type="radio" name="tipo" value="0" id="" checked>

                    <label for="">Fundo renda fixa</label>
                    <input type="radio" name="tipo" value="1" id="">
                </div>
                <div>
                    <label for="">Quantidade de meses para investimento</label>
                    <input type="number" name="txtm" id="">
                </div>
                
                <input type="submit" value="Gerar">
                <input type="reset" value="Limpar">
            </form>
        </fieldset>
    </section>
    
</body>
</html>