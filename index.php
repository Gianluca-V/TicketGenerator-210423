<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
       <a href="index.php"> <h1 class="title">TICKET GENERATOR</h1> </a>
    </header>

    <form action="#" method="post">
        <div class="product">
            <input type="text" name="product1" id="product1">
            <select name="select1">
                <option value="PepsiKo">PepsiKo</option>
                <option value="Gimbo">Gimbo</option>
                <option value="Noche">Noche</option>
            </select>
            <input type="number" name="price1" id="price1" min = 0>
        </div>

        <div class="product">
            <input type="text" name="product2" id="product2">
            <select name="select2">
                <option value="PepsiKo">PepsiKo</option>
                <option value="Gimbo">Gimbo</option>
                <option value="Noche">Noche</option>
            </select>
            <input type="number" name="price2" id="price2" min = 0>
        </div>

        <div class="product">
            <input type="text" name="product3" id="product3">
            <select name="select3">
                <option value="PepsiKo">PepsiKo</option>
                <option value="Gimbo">Gimbo</option>
                <option value="Noche">Noche</option>
            </select>
            <input type="number" name="price3" id="price3" min = 0>
        </div>

        <div class="product">
            <input type="text" name="product4" id="product4">
            <select name="select4">
                <option value="PepsiKo">PepsiKo</option>
                <option value="Gimbo">Gimbo</option>
                <option value="Noche">Noche</option>
            </select>
            <input type="number" name="price4" id="price4" min = 0>
        </div>

        <div class="product">
            <input type="text" name="product5" id="product5">
            <select name="select5">
                <option value="PepsiKo">PepsiKo</option>
                <option value="Gimbo">Gimbo</option>
                <option value="Noche">Noche</option>
            </select>
            <input type="number" name="price5" id="price5" min = 0>
        </div>

        <input type="submit" value="Enviar" name="Enviar">
        <a href="index.php" class="reset">Reset</a>
    </form>

    <footer></footer>

    <?php
        if(isset($_POST["Enviar"])){
            $subtotal = 0;
            for ($i=0; $i < 5; $i++) { 
                $subtotal += $_POST["price".($i+1)];
            }
            $subtotalIVA = $subtotal + ($subtotal*21/100);

            echo "<div class='ticket'>";
            for ($i=0; $i < 5; $i++) { 
                if($_POST["price".($i+1)] == "") $_POST["price".($i+1)] = "0";

                if($_POST["product".($i+1)] != "") echo $_POST["product".($i+1)] . "  ". $_POST["select".($i+1)] . " " . $_POST["price".($i+1)] ."<br>"."<br>";
            }
            echo "<hr>";
            echo "Subtotal:    ".$subtotal."<br>"."<br>";
            echo "Subtotal+IVA:   ".$subtotalIVA."<br>"."<br>";
            echo "</div>";
        }
    ?>
</body>
</html>