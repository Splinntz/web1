<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Monsters League</title>
        <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <div class="jumbotron">
        <?php 
            $welcome_message = 'Welcome to the Monsters League !';
            $number_monster = rand(1, 50);    
        ?>
            <h1 class="display-4"><?php echo ucfirst(strtolower($welcome_message)); ?></h1>  
            <p class="lead"><?php echo 'More than '.$number_monster.' Monsters'; ?></p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>

        <?php
            $firstMonster = 'Poussifeu';
            $secondMonster = 'Palkia';
            $thirdMonster = 'Eleksprint';
            $monsters = [$firstMonster, $secondMonster, $thirdMonster];
         
            echo var_dump($monsters);

            foreach($monsters as $monster) {
                echo $monster . " ";
            }

            $Stats = [
                'att' => '18',
                'att spé' => '82',
                'def' => '17',
                'def spé' => '73'
            ];

            $Nostenfer = [
                'name' => 'Nostenfer',
                'weight' => '20',
                'age' => '24',
                'stats' => $Stats,
                'bio' => 'insane monster'
            ];

            var_dump($Nostenfer);
            echo $Nostenfer['name'].'</br>';
            echo $Nostenfer['weight'] ?? 'oto';
            if(!isset($Nostenfer['weight'])) {
                echo'oto';
            }
            $json = file_get_contents('./resources/monsters.json', FILE_USE_INCLUDE_PATH);

            $monsters = json_decode($json);
            foreach($monsters as $monster) {
                echo($monster -> age . " ");
            }
        ?>

        <footer>
            <div class="container">
                <p>Copyright © 2019 Monsters League</p>
            </div>
        </footer>

        <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    </body>
</html>