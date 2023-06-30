<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>php-badwords</title>
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="myphp.php" method="POST">
                        <textarea name="text" id="" cols="30" rows="1" placeholder="testo"></textarea>
                        <input type="text" name="censored" placeholder="parola da censurare">
                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>