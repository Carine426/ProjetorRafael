<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css"/>
    <title>Converte Reais</title>
</head>
<body>
        <form method="GET" action="euroDolar.php">
        <h1>Converção em Dolar e Real</h1>
            <label for="valorReais">Valor em Reais :</label>
            <input type="number" name="valorReais" id="valorReais" placeholder="Valor R$" require/>
            <div>
                <label for="euro">Euro:         </label>
                <input type="radio" name="unidadeMonetaria" id="euro" value="Euro" require/> 
          
                <label for="dolar">Dólar:</label>
                <input type="radio" name="unidadeMonetaria" id="dolar" value="Dolar" require/>
            </div>
            <button>Converter</button>
            <button type="reset">Limpar</button>
        </form>
</body>
</html>