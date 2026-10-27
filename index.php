<?php
$tituloPagina = "Una Sorpresa Especial Para Ti, Mi Goida";
$mensajeCard = "Tengo algo guardado para ti, mi goida preciosa. Presiona el botón para descubrirlo. 💚";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($tituloPagina); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <div class="container">
        <!-- Pantalla inicial / Botón de activación -->
        <div class="card-intro" id="cardIntro">
            <div class="sparkle-icon">✨</div>
            <h1><?php echo htmlspecialchars($tituloPagina); ?></h1>
            <p><?php echo htmlspecialchars($mensajeCard); ?></p>
            <button id="btnAbrir" class="btn-primary">
                <span>Abrir Carta</span>
                <div class="btn-glow"></div>
            </button>
        </div>

        <!-- Carta de Amor (Oculta por defecto) -->
        <div class="letter-wrapper hidden" id="letterWrapper">
            <div class="letter-card">
                <!-- Corazón Verde Animado -->
                <div class="heart-container">
                    <svg class="green-heart" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 28C16 28 3 20.5 3 11.5C3 7.5 6 4.5 10 4.5 C13 4.5 15 6.5 16 8 C17 6.5 19 4.5 22 4.5 C26 4.5 29 7.5 29 11.5 C29 20.5 16 28 16 28Z" fill="#10B981" stroke="#34D399" stroke-width="1.5"/>
                    </svg>
                </div>

                <!-- Mensaje Romántico Personalizado -->
                <div class="letter-content">
                    <h2 class="romantic-title">Mi Goida Preciosa 💚</h2>
                    <p class="romantic-text" style="text-align: left; line-height: 1.8;">
                        Mi amor gracias por ser la chica de mi vida, por estar siempre, por ser la niña más hermosa que conozco. Le doy gracias a Dios por haberte conocido, después de amigos enamorados. Gracias mi goida preciosa, espero verte pronto mi amor. Te mando un abrazo, un besote a la niña mía, a la chica de mi vida, mi sierva preciosa.
                    </p>
                    <div class="signature" style="margin-top: 20px;">
                        <p class="author-name">Te amo mi amor lindo 💚</p>
                    </div>
                </div>

                <!-- Botón para cerrar o reiniciar -->
                <button id="btnCerrar" class="btn-secondary">Volver a Guardar</button>
            </div>
        </div>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>