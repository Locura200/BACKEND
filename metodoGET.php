<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodo Get</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
</head>
<body>
    <h1>Metodo Get</h1>
    <Form method="get">
        Nombre:
        <input type="text" name="nombre"/><br/>
        Correo:
        <input type="text" name="correo"/><br/>
        edad:
        <input type="text" name="edad"/><br/>
        <input type="submit"  value="Enviar Datos"/>
    </Form>
    <br/>
    Tu nombre es:
    <?php echo $_GET["nombre"] ?? ""; ?>
    <br/>
    Tu edad es:
    <?php echo $_GET["edad"] ?? ""; ?>
    <br/>
    Tu correo es:
    <?php echo $_GET["correo"] ?? "";?>
    
</body>
</html>