<?php 

    include('head.php');

    $envoie = false;

    session_start();

    $db = loginDB();


    if (isset($_FILES['fichier']) && $_FILES['fichier']['error'] == 0){

        if ($_FILES['fichier']['size'] <= 1000000 ){
            
            $fileInfo = pathinfo($_FILES['fichier']['name']);
            $extension = $fileInfo['extension'];
            $allowedExtensions = ['jpg', 'jpeg', 'png'];

            if (in_array($extension, $allowedExtensions)) {
                move_uploaded_file($_FILES['fichier']['tmp_name'],'file/' . basename($_FILES['fichier']['name']));
                $envoie = true;
            }
        }
    }
    if (isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['pass']) && isset($_POST['age'])){
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];
        $age = $_POST['age'];

        $requeteInsert = "INSERT INTO client (username, mail, password, age) VALUES (:name, :mail, :pass, :age)";
        $insertStatement = $db->prepare($requeteInsert);
        $insertStatement->execute([
            'name' => $name,
            'mail' => $mail,
            'pass' => $pass,
            'age' => $age,
        ]);
    }

?>

<body>
    <h1><?php echo $titre;?> ✅ </h1>
    <header>
        <div>
            <h2>
            Link : 
            <a href="index.php">HOME</a> / 
            <a href="form.php"> FORM</a> /
            <a href="js.php?hack"> JS</a> 
            </h2>
        </div>
        <div><?php testSiHack(); ?></div>

        <?php

        if ($envoie){
            echo "<div class='message'> L'envoi a bien été effectué ! </div>";

        } else {
            echo "<div class='message'> L'envoi n'a pas été effectué ! </div>";
        }

        ?>

    </header>
    <main>
        <section>
            <article>
                <h3> $_GET </h3>
                <p>
                    <?php
                    echo '<pre  >';
                    print_r($_GET);
                    echo '</pre>';
                    
                ?>
                </p>
            </article>
            <aside>
                <h3> $_POST </h3>

                <p>

                    <?php
                    echo '<pre  >';
                    print_r($_POST);
                    echo '</pre>';
                    
                ?>
                </p>

            </aside>
        </section>


        <section>
            <article>
                <h3> $_FILES['fichier'] </h3>

                <p>
                    <?php
                    echo '<pre  >';
                    print_r($_FILES['fichier']);
                    echo '</pre>';
                ?>
                </p>
            </article>
            <aside>
                <h3> $fileInfo </h3>
                <p> 
                    <?php
                        echo '<pre  >';
                        print_r($fileInfo);
                        echo '</pre>';
                    ?>
                </p>

            </aside>
        </section>
        <section>
            <article>
                <h3> $_COOKIE </h3>

                <p>
                    <?php
                    echo '<pre  >';
                    print_r($_COOKIE);
                    echo '</pre>';
                ?>
                </p>
            </article>
            <aside>
                <h3>  <?php  $sqlRequete = 'SELECT * FROM client';echo $sqlRequete; ?> </h3>
                <p>
                    <?php

                    $clientStatement = $db->prepare($sqlRequete);
                    $clientStatement->execute();
                    $client = $clientStatement->fetchAll();

                    echo '<pre  >';
                    print_r($client);
                    echo '</pre>';
                ?>
                </p>

            
            </aside>
        </section>

    </main>
    <footer>

    

    </footer>
</body>

</html>