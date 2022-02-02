<?php include './TranslationYandex.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Mock Translator App</title>
</head>

<body>
    <div class="container">
        <form action="index.php" method="get">
            <div class="form-group"> <br>
                <p><label for="text_from">Translate from language: </label> <input class="form-control" type="text" name="lang_from" placeholder="ex: en (lowercase, without spaces)"></p>
                <textarea class="form-control" name="text_from" id="" cols="30" rows="5"></textarea>
            </div>

            <div class="form-group"> <br>
                <p><label for="text_to">to language: </label> <input class="form-control" type="text" name="lang_to" placeholder="ex: pt (lowercase, without spaces)"></p>
                <textarea class="form-control" name="text_to" id="" cols="30" rows="5"><?php $listener->echo_translation(); ?></textarea>
            </div>

            <div class="form-group"> <br>
                <input class="btn btn-warning form-control" type="submit" name="submit" value="Translate">
            </div>
        </form>
    </div>
    
    <div class="container"> <br><hr>
        <p>Powered by <a href=""> https://www.yandex.com/ru/translate </a></p>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>