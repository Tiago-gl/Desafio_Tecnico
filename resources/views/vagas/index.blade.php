<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>vagas</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <img href="https://img.freepik.com/fotos-gratis/menina-bonita-alegre-e-divertida-mostrando-a-voce-uma-promocao-incrivel-apontando-no-canto-superior-esquerdo-segurando-a-mao-no-quadril-e-sorrindo-amplamente-com-espanto-e-curiosidade-em-pe-com-um-fundo-branco-entusiasmado_176420-36843.jpg"/>
        <!-- Styles -->
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body{
                font-family: 'Futura', sans-serif;
                font-size: 20px;
                height: 100vh;
                display: flex;
                background-color: #ffffff;
            }
            body{
                background-image: url("https://img.freepik.com/fotos-gratis/menina-bonita-alegre-e-divertida-mostrando-a-voce-uma-promocao-incrivel-apontando-no-canto-superior-esquerdo-segurando-a-mao-no-quadril-e-sorrindo-amplamente-com-espanto-e-curiosidade-em-pe-com-um-fundo-branco-entusiasmado_176420-36843.jpg");
                background-repeat: no-repeat;
                background-position: right;
                background-size: 650px;
            }
            
        </style>
    </head>
    <body>
        <header>
            <h1>STS Informática</h1>
        </header>
        <style>
            h2{
                color: #45f3ff;
            }
            label{
                color: azure;
            }
        </style>
        <div class='card'>
            <h2>Cadrasto de Vagas</h2>
            <form action="/vagas" method="POST">
                @csrf
                <div class="inputbox">
                    <input required="required" type="text">
                    <span>Vaga:</span>
                    <i></i>
                </div>
                    <br>
                    <div class="inputbox">
                        <input required="required" type="text">
                        <span>Requisitos:</span>
                        <i></i>
                    </div>
                    <br>
                    <br>
                    <button type="submit">Adicionar vaga</button>
            </form>
        </div>
        <style>
            .inputbox {
                position: relative;
                width: 254px;
                }

            .inputbox input {
                position: relative;
                width: 100%;
                padding: 20px 10px 10px;
                background: transparent;
                outline: none;
                box-shadow: none;
                border: none;
                color: #23242a;
                font-size: 1em;
                letter-spacing: 0.05em;
                transition: 0.5s;
                z-index: 10;
            }

            .inputbox span {
                position: absolute;
                left: 0;
                padding: 20px 10px 10px;
                font-size: 1em;
                color: #8f8f8f;
                letter-spacing: 00.05em;
                transition: 0.5s;
                pointer-events: none;
            }

            .inputbox input:valid ~span,
            .inputbox input:focus ~span {
                color: #45f3ff;
                transform: translateX(-10px) translateY(-34px);
                font-size: 0,75em;
            }

            .inputbox i {
                position: absolute;
                left: 0;
                bottom: 0;
                width: 100%;
                height: 2px;
                background: #45f3ff;
                border-radius: 4px;
                transition: 0.5s;
                pointer-events: none;
                z-index: 9;
            }

            .inputbox input:valid ~i,
            .inputbox input:focus ~i {
                height: 44px;
            }
            button {
                width: 272px;
                font-size: 17px;
                padding: 0.5em 2em;
                border: transparent;
                box-shadow: 2px 2px 4px rgba(0,0,0,0.4);
                background: #45f3ff;
                color: rgb(56, 54, 54);
                border-radius: 4px;
            }

            button:hover {
                background: rgb(2,0,36);
                background: linear-gradient(90deg, rgba(30,144,255,1) 0%, rgba(0,212,255,1) 100%);
            }

            button:active {
                transform: translate(0em, 0.2em);
            }
            .card {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                text-align: center;
                margin: auto;
                padding: 0.5em;
                width: 272px;
                height: 350px;
                border-radius: 30px;
                background: #212121;
                box-shadow: 15px 15px 30px rgb(25, 25, 25),
                -10px -10px 20px rgb(60, 60, 60);
            }
            body{
                display: flex;
                flex-direction: column;
                min-height: 100vh;
            }
            header{
                background-color: #146983;
                color: #fff;
                padding: 1rem;
            }
            
        </style>
    </body>
</html>