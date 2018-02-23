<html>
<head>
    <!-- script jquery, script bootstrap, style bootstrap -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>DATABASE</title>
</head>
<body>
<div class="container">
    <form action="phpInsert.php" method="get">
    <h2>Inserisci i dati</h2>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" name="nome" placeholder="Nome" required>
        </div>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" name="cognome" placeholder="Cognome" required>
        </div>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
        <br>
        <button type='submit' value="aggiungi" name="aggiungi" class="btn btn-success form-control" >
            <span class="glyphicon glyphicon-send"></span>
            Invia
        </button>
    </form>
</div>
</body>
</html>