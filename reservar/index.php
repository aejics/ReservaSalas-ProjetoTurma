<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar uma Sala</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Reservar uma Sala</h1>
    <form method="POST" action="/reservar/criarreserva">
        <label for="sala">Sala:</label>
        <input type="text" name="sala" id="sala">
        <br>
        <label for="data">Data:</label>
        <input type="date" name="data" id="data">
        <br>
        <label for="hora">Hora:</label>
        <input type="time" name="hora" id="hora">
        <br>
        <button type="submit">Reservar</button>
    </form>
</body>
</html>