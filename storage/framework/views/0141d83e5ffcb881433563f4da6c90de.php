<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bem vindo!</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <img href="https://img.freepik.com/fotos-gratis/menina-bonita-alegre-e-divertida-mostrando-a-voce-uma-promocao-incrivel-apontando-no-canto-superior-esquerdo-segurando-a-mao-no-quadril-e-sorrindo-amplamente-com-espanto-e-curiosidade-em-pe-com-um-fundo-branco-entusiasmado_176420-36843.jpg"/>
    </head>
    <body>
        <header>
            <h1>STS Informática</h1>
        </header>
        <div class="flex">
            <aside>
                <h2>Vagas Disponiveis</h2>
                    <ul>
                        <?php $__currentLoopData = $vagas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vaga): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($vaga->nome_vaga); ?> - <?php echo e($vaga->requisitos); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
            </aside>
            <main>
                <h1>Candidatos:</h1>
                    <ul>
                        <?php $__currentLoopData = $candidatos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($candidato->nome); ?> - <?php echo e($candidato->habilidades); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
            </main>     
        </div>
        <footer>
            <p>Links para cadastro de candidatos e vagas:</p>
                <button><a href="<?php echo e(route('candidatos.index')); ?>">Candidatos</a></button>
                <button><a href="<?php echo e(route('vagas.index')); ?>">Vagas</a></button>
        </footer>
    </body>
    <style>
        body {
            font-family: 'Futura', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header{
            background-color: #146983;
            color: #fff;
            padding: 1rem;
        }
        .flex {
            display: flex;
            flex-grow: 1;
        }
        aside{
            background-color: #eee;
            width: 200px;
            padding: 1rem;
        }
        main {
            flex-grow: 1;
            padding: 1rem;
        }
        footer{
            background-color: #146983;
            color: #fff;
            padding: 1rem;
        }
        body{
            background-image: url("https://img.freepik.com/fotos-gratis/menina-bonita-alegre-e-divertida-mostrando-a-voce-uma-promocao-incrivel-apontando-no-canto-superior-esquerdo-segurando-a-mao-no-quadril-e-sorrindo-amplamente-com-espanto-e-curiosidade-em-pe-com-um-fundo-branco-entusiasmado_176420-36843.jpg");
            background-position: right;
            background-repeat: no-repeat;
            background-size: 650px;
        }
        a{
            text-decoration: none;
            
        }
    </style>
</html><?php /**PATH C:\tuto\resources\views/welcome.blade.php ENDPATH**/ ?>