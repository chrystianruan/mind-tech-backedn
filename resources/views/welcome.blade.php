<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <style>
        .main{ 
            display: flex;
            flex-direction: column;
            margin: 1%;
            grid: 15px;
        }
    </style>
 
        <form action="/api/new-client-and-message" method="POST">
            @csrf
            <div class="main">
            <label>Nome</label>
            <input type="text" name="name">
            <label>Email</label>
            <input type="email" name="email">
            <label>Telefone</label>
            <input type="telephone" name="telephone">
            <label>Mensagem</label>
            <input type="text" name="message">
            <button>Enviar</button>
            </div>
        </form>

</body>
</html>