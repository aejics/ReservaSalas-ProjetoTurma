<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar uma Sala</title>
</head>
<body>
    <h1>Reservar uma Sala</h1>
    <form action="/reservar.php">
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