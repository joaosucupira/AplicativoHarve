<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex col-12 m-3" style="flex-direction: column;justify-content:center; align-items:center; ">
        <h1>Aplicativo Versão A</h1>
        <p class="btn btn-primary m-3 mr-5"><a  href="/" style="color:white; text-decoration:none;">INICIO</a></p>
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