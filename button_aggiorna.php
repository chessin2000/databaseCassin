<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript_funzioni.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">

    <title>DATABASE</title>
</head>
<body>

<form action='update.php' method='get'>
    <h2>Modifica i dati</h2>
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
        <input type='text' class="form-control" name='nome' placeholder='Nome' value="<?php echo $_GET['nome']; ?>" required>
    </div>
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
        <input type='text' class="form-control" name='cognome' placeholder='Cognome' value='<?php echo $_GET['cognome']; ?>' required>
    </div>
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
        <input type='email' class="form-control" name='email' placeholder='Email' value='<?php echo $_GET['email']; ?>' required>
    </div>
    <br>
    <button value="Aggiorna" name="aggiorna" class="btn btn-success form-control" type="submit">
        <span class="glyphicon glyphicon-send"></span>
        Invia
    </button>
    <input type ='hidden' class="form-control" name ='Id' value ='<?php echo $_GET['Id']; ?>'>
    <br>
</form>
</body>
</html>
