<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <section>
        <fieldset>
            <form action="exe06.php" method="post">
                <div>
                    <label for="">Digite seu nome</label>
                    <input type="text" name="txtnome" id="">
                </div>
                <div>
                    <label for="">Digite o peso</label>
                    <input type="number"  step="0.01" name="txtpeso" id="">
                </div>
                <div>
                    <label for="">Digite a altura</label>
                    <input type="number"  step="0.01" name="txtaltura" id="">
                </div>
                <div>
                    <label for="">Maculino</label>
                    <input type="radio" name="txtsexo" value="0" id="" checked>

                    <label for="">Feminino</label>
                    <input type="radio" name="txtsexo" value="1" id="">
                </div>
                <input type="submit" value="Calcular">
                <input type="reset" value="Limpar">
                <button><a href="../../index.html">Voltar</a></button>
            </form>
        </fieldset>
    </section>
    
</body>
</html>