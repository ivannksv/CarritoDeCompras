</div>
</div>

<!-- PIE DE PÁGINA -->
<footer id="footer">
    <style>
        /* Estilos generales del footer */
        #footer {
            clear: both;
            text-align: center;
            padding-top: 10px;
            padding-bottom: 10px;
            color: white;
            background: linear-gradient(to top, black, #222222); /* Degradado negro a gris oscuro */
            position: relative; /* Mantiene el footer en su posición relativa */
        }

        /* Estilos para los encabezados y párrafos dentro del footer */
        #footer h3 {
            font-size: 18px;
            margin-bottom: 10px;
            border-bottom: 2px solid #ffffff; /* Línea debajo del encabezado */
            display: inline-block;
            padding-bottom: 5px;
        }

        #footer p {
            margin: 10px 0;
            max-width: 100%;
            width: calc(100% - 20px);
        }

        /* Estilos para los botones dentro del footer */
        #footer a.button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px auto;
            text-decoration: none;
            color: white;
            background: linear-gradient(to right, #080071, #222222);
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
        }

        #footer a.button:hover {
            background-color: #050050; /* Color de fondo al pasar el ratón */
            transform: scale(1.05);
        }

        /* Estilos para el contenedor principal del footer */
        #footer .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            align-items: flex-start;
        }

        /* Estilos para la sección de derechos reservados */
        #footer .reserved-rights {
            background-color: #000000;
            padding: 10px 0;
            margin-top: 2px; /* Reducido el margen superior para acercar los derechos reservados a los botones */
            font-size: 14px;
            width: 100%;
            text-align: center;
            position: relative;
        }
    </style>

    <div class="footer-content">
        <div style="flex: 1; margin-bottom: 20px; text-align: left;">
            <h3>Asistencia al Cliente</h3>
            <p>Estamos aquí para ayudarte. Si tienes alguna pregunta o necesitas soporte, no dudes en contactarnos.</p>
            <a href="contact.php" class="button">Contactar</a>
        </div>

        <div style="flex: 1; margin-bottom: 20px; text-align: left;">
            <h3>Mantente Conectado</h3>
            <p>Síguenos en nuestras redes sociales para estar al tanto de las últimas novedades y ofertas.</p>
            <a href="visit.php" class="button">Visitar</a>
        </div>
    </div>
    
    <div class="reserved-rights">
        <p>&copy; 2024 Equipo de Técnicos. Jose Hernandez. Todos los derechos reservados.</p>
    </div>
    
    <script src="assets/js/script.js"></script>
</footer>

</div>
</body>

</html>
