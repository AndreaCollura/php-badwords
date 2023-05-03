<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>index</title>
</head>
<body>

    <form action="page1.php" method="POST">
        <label for="txt">Inserire testo da censurare</label>
        <textarea type="text" name="txt" id="txt"></textarea>
        <label for="badword">Testo da censurare</label>
        <input type="text" name="badword" id="badword">
        <input type="submit" value="invia">
    </form>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script type="text/javascript" src="./js/utility.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>
</body>
</html>