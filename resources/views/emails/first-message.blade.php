<html lang="pt-br">
    <head>        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Geo&family=JetBrains+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <style>
        body {
            margin: 0vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background: linear-gradient(90deg, #5EA1E2, #5c6f9a);
        }

        .first{
            width: 100vw;
            height: 88vh;
            background: linear-gradient(90deg, #5EA1E2, #5c6f9a);
            display: grid;
            justify-content: center;
            align-items: center;
        }

        .second{
            background: linear-gradient(270deg, rgba(0,0,0,.4), rgba(0,0,0,0.3));
            position: absolute;
            top: 0;
            height: 19vh;
            width: 100%;
            display: flex;
            align-items: center;
            align-content: center;
        }

        .second p{
            font-family: 'Jetbrains Mono'; margin: 2vw auto; align-self: center; font-size: 5vw; color: white;
        }

        .third{
            margin-top: 15vh;
            align-items: center; align-content: center; display: block; padding: 3vw;
        }

        .third p{
            font-family: 'Jetbrains Mono'; margin: 2vw auto; align-self: center; font-size: 2.3vw; color: white;
        }

        .fourth{
            width: 100vw;
            height: 12vh;
            display: grid;
            justify-content: center;
            align-items: center;
            background: linear-gradient(270deg, rgba(0,0,0,.4), rgba(0,0,0,0.3));
        }

        footer p{
            font-family: 'Jetbrains Mono'; margin: 2vw auto; align-self: center; font-size: 2vw; color: white;
        }

        @media screen and (max-width: 992px) {
            .second p{
                font-size: 7vw;
            }

            .third{
                padding: 10vw;
            }

            .third p{
                font-size: 3.3vw;
            }

            footer p{
                font-size: 2.8vw;
            }
        }

        @media screen and (max-width: 640px) {
            .second p{
                font-size: 13vw;
            }

            .third{
                padding: 10vw;
            }

            .third p{
                font-size: 5.6vw;
            }

            footer p{
                width: 80%;
                text-align: center;
                font-size: 5vw;
            }
        }
        </style>
    </head>
    <body>
        <div class="first">
            <div class="second">
                <p>Mind Tech</p>            
            </div>
            <div class="third">
                <p>
                    Olá, {{$mailData['contact']}}! Obrigado por entrar em contato com a equipe Mind Tech!
                </p> 
                <p>
                    Em breve iremos entrar em contato com você para realizar um orçamento. O contato será feito por meio
                    do email ou telefone informado. Até já!
                </p>              
            </div>
        </div>        
    </body>
    <footer>
        <div class="fourth">
            <p>
                &#169 2023 Mind Tech - Todos os direitos reservados.
            </p>
        </div>   
    </footer>
</html>