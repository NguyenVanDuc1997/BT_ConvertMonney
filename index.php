<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method="post">
            <h1>Currency Converter</h1>
            <label for="">Amount</label>
            <input type="text" name="amount" min="0" placeholder="0">
            <label for="">From</label>
            <select name="from" id="">
                <option value="USD">USD</option>
                <option value="VND">VND</option>
            </select>
            &nbsp;
            <label for="">To</label>&nbsp;
            <select name="to" id="">
                <option value="USD">USD</option>
                <option value="VND">VND</option>
            </select>
            <input type="submit" value="Convert">
        </form>
    </div>

    <div>
        <?php
            if ($_SERVER["REQUEST_METHOD"]=="POST"){
                define("USD","USD");
                define("VND","VND");
                $amount= $_POST["amount"];
                $from=$_POST["from"];
                $to=$_POST["to"];
            }

            switch ($from){
                case USD:
                    if ($to==VND)
                        echo $amount ." USD = ".$amount*23000 . " VND";
                    else
                        echo $amount." USD";
                    break;
                case VND:
                    if ($to==USD)
                        echo $amount." VND = ".$amount/23000 . " USD";
                    else
                        echo $amount." VND";
            }
        ?>

    </div>
</body>
</html>