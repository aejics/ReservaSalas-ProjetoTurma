<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva Professor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="center">
    <br>
    <h1>Reserva de Sala</h1>

    <h2>Formulário de Reserva</h2>
    <form action="" method="POST" class="mb-4">
        <div class="mb-3">
            <label for="tempo" class="form-label">Tempo</label>
            <input type="time" id="tempo" name="tempo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="dia" class="form-label">Dia</label>
            <input type="date" id="dia" name="dia" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="sala" class="form-label">Sala</label>
            <input type="text" id="sala" name="sala" class="form-control" placeholder="Ex: Sala 46" required>
        </div>
        <div class="mb-3">
            <label for="turma" class="form-label">Turma</label>
            <input type="text" id="turma" name="turma" class="form-control" placeholder="Ex: Turma 2ºE" required>
        </div>
        <button type="submit" class="btn btn-primary">Reservar</button>
    </form>

    <h2>Reservas Existentes</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tempo</th>
                <th>Dia</th>
                <th>Sala</th>
                <th>Turma</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Verifica se o formulário foi enviado
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Recebe os dados do formulário
                $tempo = htmlspecialchars($_POST['tempo']);
                $dia = htmlspecialchars($_POST['dia']);
                $sala = htmlspecialchars($_POST['sala']);
                $turma = htmlspecialchars($_POST['turma']);

                // Exibe os dados na tabela
                echo "<tr>";
                echo "<td>$tempo</td>";
                echo "<td>$dia</td>";
                echo "<td>$sala</td>";
                echo "<td>$turma</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>