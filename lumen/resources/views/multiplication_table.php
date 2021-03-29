<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="view para exibir uma tabuada">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" style="align-items: center; border: 1px solid black">
        <thead>
            <td>math account</td>
            <td>Result</td>
        </thead>
        <tbody>
            <?php
                for ($i = 1; $i<=10; $i++){
            ?>
                    <tr>
                        <td><?=$number." X ".$i."= "?></td>
                        <td><?=$number*$i;?></td>
                    </tr>
            <?php }?>
        </tbody>
    </table>
</body>
</html>
