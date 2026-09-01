<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo mensaje de contacto</title>
</head>

<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">

    <h2 style="color: #2563eb;">
        Nuevo mensaje desde tu portafolio
    </h2>

    <p>
        Has recibido un nuevo mensaje desde el formulario de contacto.
    </p>

    <hr>

    <p>
        <strong>Nombre:</strong><br>
        {{ $nombre }}
    </p>

    <p>
        <strong>Email:</strong><br>
        {{ $email }}
    </p>

    <p>
        <strong>Mensaje:</strong><br>
        {{ $mensaje }}
    </p>

    <hr>

    <p style="font-size: 13px; color: #777;">
        Este mensaje fue enviado desde el formulario de contacto
        de tu portafolio web.
    </p>

</body>
</html>