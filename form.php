<?php include('head.php'); ?>

    <body>
        <h1><?php echo $titre;?> ✅ </h1>

        <header>
            <h2>
            <div>Link : <a href="index.php">HOME</a></div>    
            <div>Jackson Richardson : <a href="recu.php?nom=Richardson&amp;prenom=Jackson">RECU</a></div>
            </h2>
        
        </header>
        <main>
            <form action="recu.php" method="post" enctype="multipart/form-data">
                <section>
                    <article>
                        <fieldset>
                            <legend>Informations personnelles :</legend>
                            <p>
                                <label for="name"></label><span> Username :</span>
                                <input type="text" name="name" placeholder="DURAND">
                            </p>
                            <p>
                                <label for="pass"></label><span> Mot de passe :</span>
                                <input type="password" name="pass">
                            </p>
                            <p>
                                <label for="mail"></label><span>Adresse mail :</span>
                                <input type="email" name="mail" placeholder="henri.durand@gmail.com"
                                    pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}">
                            </p>
                            <p>
                                <label for="dateDeNaissance"></label><span>Date de naissance :</span>
                                <input type="date" name="dateDeNaissance">
                            </p>
                            <p>
                                <label for="age"></label><span>Age :</span>
                                <input type="text" name="age" placeholder="21">
                            </p>
                            <p>
                                <label for="pays"></label><span>Pays d’origine :</span>

                                <select name="pays" id="pays">
                                    <option value="">D'où venez-vous ?</option>
                                    <option value="usa">U.S.A</option>
                                    <option value="fr">France</option>
                                    <option value="chn">Chine</option>
                                    <option value="vnm">Viêt Nam</option>
                                    <option value="tun">Tunisie</option>
                                </select>
                            </p>

                        </fieldset>
                    </article>
                    <aside>
                        <fieldset>
                            <legend>Saisissez votre message :</legend>
                            <p>
                                <label for="message"></label>
                                <textarea name="message" rows="11,9" cols="30"> </textarea>
                            </p>
                            <p>
                                <label for="fichier"></file>
                                <input type="file" name="fichier" /> 
                            </p>
                                <button type="submit"> Envoyé </button>
                        </fieldset>
                    </aside>
                </section>
            </form>
        </main>

        <footer>


        </footer>
    </body>

</html>