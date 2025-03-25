<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}
.container {
    text-align: center;
    padding: 20px;
}
.icon-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
}
.icon-button {
    background: none;
    border: none;
    cursor: pointer;
    transition: transform 0.3s ease;
}
.icon-button i {
    font-size: 24px;
    color: #333;
    padding: 10px;
    border-radius: 50%;
    transition: background-color 0.3s ease, color 0.3s ease;
}
.icon-button:hover i {
    background-color: rgba(0,0,0,0.1);
    transform: scale(1.2);
}
.icon-button:active i {
    background-color: rgba(0,0,0,0.2);
}
</style>
</head>
<body>
<div class="container">
<di class="content">
<h1>Reserva Salas</h1>
<class="icon-container">
    <button class="icon-button icon-fill" onclick="location.href='/'">
        <i class="fa fa-home"></i>
    </button>
    
    <button class="icon-button icon-enter" onclick="location.href='/perfil'">
        <i class="fa fa-user"></i>
    </button>
    
    <button class="icon-button icon-expand" onclick="location.href='/reserva_prof'">
        <i class="fa fa-bars"></i>
    </button>
    
    <button class="icon-button icon-collapse" onclick="location.href='/login'">
        <i class="fa fa-sign-in"></i>
    </button>
    
    <button class="icon-button icon-rotate" onclick="location.href='/contato'">
        <i class="fa fa-phone"></i>
    </button>
</div>
</div>
</div>
</body>
</html>