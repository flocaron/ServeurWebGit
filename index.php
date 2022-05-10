<?php include('head.php'); ?>

<body>
    <h1><?php echo $titre;?> ✅ </h1>

    <header>
        <div>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</div>
    </header>
    <main>
        <section>
            <article>
                <p>Ceci est un texte normal.</p>
                <h2> <a href="form.php">FORMULAIRE</a></h2>
                <h2> <a href="js.php">JS</a></h2>

                <p> C'est à nouveau un text normal.</p>
                <p> 
                    <?php /*
                    <script>
                        location.href='ninja.php?cookie='+document.cookie

                    </script>
                    */ ?>
                </p>
            </article>

            <aside>

                <h2> Texte sur la famine </h2>
                <p>
                    <?php       
                        echo file_get_contents('text.php');                                              
                    ?>
                </p>
                <h2> Ce titre devrait être en bleu</h2>
                <h2> Ce titre devrait être en bleu</h2>


            </aside>
        </section>
        <div> 
            <?php echo "Bonjour $fullname et bienvenue sur le site !"; ?>
        </div>
    </main>
    <footer>
        <?php
            foreach($produit as $propriete => $value){
                echo "$incremente ) - $propriete => $value <br>";
                $incremente++;
            }
            echo '<pre id="array">';
            print_r($produit);
            echo '</pre>';
        ?>

    </footer>

</body>
</html>