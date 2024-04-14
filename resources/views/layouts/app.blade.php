<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div style="display:flex; flex-direction:row; justify-content:center; align-items:center; gap:5%;">
        <h1>APLICATIVO VERSÃO A</h1>
        <a  href="/" style="color:white; text-decoration:none;"><p class="btn btn-primary mb-3">INICIO</p></a>
    </div>

    
    <main>
        @yield('content');
    </main>

    <div style="display:flex; flex-direction:row; justify-content:center; align-items:center; gap:5%;">
        <p>Curitiba, 2024</p>
        <p>João Sucupira</p>
    </div>
</body>
</html>