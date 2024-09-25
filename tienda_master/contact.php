<?php 

require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/parameters.php';
require_once 'helpers/utils.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';

?>

<main>
    <div class="contact-background">
        <div class="header-container">
            <h1>Contáctanos</h1>
        </div>
        <p>Si tienes alguna pregunta o necesitas más información, no dudes en ponerte en contacto con nosotros utilizando el formulario a continuación. Te responderemos lo antes posible.</p>

        <div class="contact-container">
            <?php
            // Mensaje que se mostrará después de enviar el formulario
            $message = '';

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Procesar el formulario
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $messageText = htmlspecialchars($_POST['message']);

                // Aquí puedes agregar el código para enviar el mensaje por correo o guardarlo en una base de datos
                // Por ahora, solo mostramos un mensaje de éxito

                $message = '<p class="success-message">¡Gracias por contactarnos, ' . $name . '! Hemos recibido tu mensaje y te responderemos pronto.</p>';
            }
            ?>

            <div class="form-info-container">
                <form action="contact.php" method="POST" class="contact-form">
                    <div class="form-group">
                        <label for="name">Tu Nombre</label>
                        <input type="text" name="name" id="name" placeholder="Introduce tu nombre" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Tu Correo Electrónico</label>
                        <input type="email" name="email" id="email" placeholder="Introduce tu correo electrónico" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Tu Mensaje</label>
                        <textarea name="message" id="message" placeholder="Escribe tu mensaje" required></textarea>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="submit-btn">Enviar Mensaje</button>
                        <?php if ($message): ?>
                            <div class="message-container"><?php echo $message; ?></div>
                        <?php endif; ?>
                    </div>
                </form>

                <div class="contact-info">
                    <h2>Nuestra Información de Contacto</h2>
                    <p><strong>Correo Electrónico:</strong> Jose.Hernandez@Tecnica7.edu.ar</p>
                    <p><strong>Teléfono:</strong> 011 42014180 </p>
                    <p><strong>Dirección:</strong>  Ing. Marconi 745, B1870 Avellaneda, Provincia de Buenos Aires</p>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    .contact-background {
        background: linear-gradient(to right, #f5f5f5, #ffffff); /* Degradado de gris claro a blanco */
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0,0,0,0.1); /* Sombra más pronunciada para un efecto de profundidad */
        max-width: 800px;
        margin: 20px auto;
    }

    .header-container {
        display: flex;
        align-items: center;
        justify-content: space-between; /* Espacio entre el título y los botones */
        margin-bottom: 20px;
    }

    h1 {
        color: #333333; /* Color oscuro para el encabezado */
        font-family: 'Arial', sans-serif; /* Fuente para el encabezado */
        margin: 0; /* Eliminar el margen predeterminado del encabezado */
    }

    .button-container {
        display: flex;
        gap: 10px; /* Espacio entre los botones */
    }

    .contact-button, .visit-button {
        background-color: #333333; /* Fondo negro para los botones */
        color: #ffffff; /* Texto blanco en los botones */
        border: none;
        padding: 12px 25px;
        border-radius: 6px;
        text-decoration: none;
        font-family: 'Arial', sans-serif; /* Fuente para los botones */
        font-weight: bold;
        text-align: center;
        transition: background-color 0.3s ease; /* Transición suave para el color de fondo */
        display: inline-block;
    }

    .contact-button:hover, .visit-button:hover {
        background-color: #555555; /* Botón negro más claro al pasar el ratón */
    }

    p {
        color: #666666; /* Color gris para el texto del párrafo */
        font-family: 'Arial', sans-serif; /* Fuente para el texto del párrafo */
        margin-bottom: 20px;
    }

    .contact-container {
        display: flex;
        gap: 30px; /* Espacio entre el formulario y la información de contacto */
    }

    .form-info-container {
        display: flex;
        flex: 1;
        gap: 30px; /* Espacio entre el formulario y la información de contacto */
        align-items: flex-start; /* Alinear los elementos al principio (superior) */
    }

    .contact-form {
        background: #ffffff; /* Fondo blanco para el formulario */
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1); /* Sombra sutil alrededor del formulario */
        flex: 1;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #333333; /* Color oscuro para las etiquetas */
    }

    .form-group input, 
    .form-group textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #dddddd; /* Borde gris claro para los inputs */
        border-radius: 6px;
        font-family: 'Arial', sans-serif; /* Fuente para los inputs */
        box-sizing: border-box; /* Asegura que el padding no aumente el ancho total */
        margin-bottom: 15px;
    }

    .form-group textarea {
        resize: vertical; /* Permite que el textarea se redimensione verticalmente */
        height: 150px; /* Altura predeterminada del textarea */
    }

    .submit-btn {
        background-color: #333333; /* Botón negro */
        color: #ffffff; /* Texto blanco en el botón */
        border: none;
        padding: 12px 25px;
        border-radius: 6px;
        cursor: pointer;
        font-family: 'Arial', sans-serif; /* Fuente para el botón */
        font-weight: bold;
        transition: background-color 0.3s ease; /* Transición suave para el color de fondo */
    }

    .submit-btn:hover {
        background-color: #555555; /* Botón negro más claro al pasar el ratón */
    }

    .form-actions {
        display: flex;
        align-items: center;
        justify-content: space-between; /* Espacio entre el botón y el mensaje */
        margin-top: 20px;
    }

    .message-container {
        color: #4CAF50; /* Color verde para el mensaje de éxito */
        font-family: 'Arial', sans-serif; /* Fuente para el mensaje de éxito */
        font-weight: bold;
        margin-left: 20px; /* Espacio a la izquierda del mensaje */
        flex-grow: 1; /* Permite que el contenedor del mensaje ocupe el espacio restante */
    }

    .contact-info {
        background: #f9f9f9; /* Fondo gris claro para la información de contacto */
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1); /* Sombra sutil alrededor del contenedor */
        flex: 1;
    }
</style>
