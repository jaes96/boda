<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BODA A & T</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@7.x/css/materialdesignicons.min.css" rel="stylesheet">
</head>
<style>
    body{
        padding: 0;
        margin: 0;
        font-family: "Dancing Script", cursive;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
    }
    .imgFondo{
        position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 50%;
            object-fit: cover;
            z-index: -1;
    }
    #countdown {
        margin-bottom: 8vh;
    }
    .titulo{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 50%;
        display: flex;
        flex-direction: column;
        justify-content: end;
        align-items: center;
        color: white;
        background: rgba(0, 0, 0, 0.5); /* Fondo negro semitransparente */
        
    }
   .title{
    font-size: 2rem;
    margin-top: 5px;

   }
   .espacio{
    height: 50vh;
   }
   .centro{
        display: flex;
        justify-content: center;
   }

   .invitation-container {
            background-color: #1a1a1a;
            padding-top: 20px;
            height: 70vh;
            text-align: center;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            position: relative;
            color:white;
        }
        .decorative-border {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            border: 10px solid transparent;
            border-image: url('./img/borde.jpg') 30 stretch;
            z-index: 99;
        }
        .invitation-container h1 {
            font-size: 36px;
            margin: 20px 0;
            font-weight: normal;
        }
        .invitation-container h2 {
            font-size: 24px;
            margin: 20px 0;
            font-weight: normal;
        }
        .invitation-container p {
            font-size: 15px;
            margin: 10px 0;
        }
        .date-time {
            margin-top: 30px;
        }
        .date-time p {
            margin: 5px 0;
        }
        .invitation-container .centro p {
            font-size: 12px;
            margin: 10px 0;
        }
        .bordes{
            border-top: 1px solid white;
            border-bottom: 1px solid white;
            padding-top: 4px;
            padding-bottom: 4px;
        }
        .dia{
            font-size: 30px;
    position: absolute;
    background: #1a1a1a;
    transform: translateY(-5px);
        }
</style>
<body>
    <div>
        <img class="imgFondo" src="img/fondo.jpg" alt="">
        <div class="titulo">
            <label class="title">NOS CASAMOS</label>
            <label style="margin-bottom: 15px;"></label>
            <label id="countdown">FALTAN</label>
        </div>
        
    </div>
    <div class="espacio"></div>
    <div class="invitation-container">
        <div class="decorative-border"></div>
        <p>NUESTRA BODA</p>
        <h1>ALMA <br> & <br> NEFTALÍ</h1>
        <p>CON LA BENDICÍON DE DIOS Y <br> DE NUESTROS PADRES</p>
        <div class="centro">
            <div style="width: 100%;">
                <p>LUIS MIGUEL ESPARZA GOMEZ</p>
                <p>MARIA GUADALUPE SANTANA MEDINA</p>
            </div>
            <div style="width: 100%;">
                <p>LA FURIA</p>
                <p>LA ESPOSA DE LA FURIA</p>
            </div>
        </div>
        <p>LOS INVITAMOS CORDIALMENTE A CELEBRAR</p><br>
        <div class="centro">
            <div style="width: 100%;" class="bordes">NOVIEMBRE</div>
            <div style="width: 20%;" class="dia">9</div>
            <div style="width: 100%;" class="bordes">2024</div>
        </div>
        <div class="date-time">
            <p>6:00 PM <br> PARROQUIA DE LA SANTISIMA TRINIDAD</p>
            <p>RECEPCION SALON CLUB DE LEONES</p>
         
        </div>
        <div>
            <p>¡TE ESPERAMOS!</p>
        </div>
    </div>
</body>
</html>
<script>
    $(document).ready(function() {
        // Fecha objetivo
        var targetDate = new Date("2024-11-09T19:00:00").getTime();

        // Actualizar la cuenta regresiva cada 1 segundo
        var countdown = setInterval(function() {
            var now = new Date().getTime();
            var distance = targetDate - now;

            // Cálculo de días, horas, minutos y segundos
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Mostrar la cuenta regresiva en el label
            $("#countdown").text("FALTAN " + days + "d " + hours + "h " + minutes + "m " + seconds + "s ");

            // Si la cuenta regresiva ha terminado
            if (distance < 0) {
                clearInterval(countdown);
                $("#countdown").text("¡La boda ha comenzado!");
            }
        }, 100);
    });
</script>
