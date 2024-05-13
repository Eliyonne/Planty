<!-- considère la création codé du formulaire en lieu et place de contact 7 ou de son language -->

<form action="" method="get" class="commande" id="commande">
    <!--<div class="article-choix">
        <div class="divider-horizontal"></div>
        <h3>Votre commande</h3>
        <div class="article">
            <img src="./assets/articlefraise.png" alt="commandez des fraises">
            <input type="text" name="Article article_quantite_1" id="article_quantite_1">
        </div>
        <div class="article">
            <img src="./assets/articlepamp.png" alt="commandez des pamplemousses">
            <input type="text" name="Article article_quantite_2" id="article_quantite_2">
        </div>
        <div class="article">
            <img src="./assets/articleframboise.png" alt="commandez des framboises">
            <input type="text" name="Article article_quantite_3" id="article_quantite_3">
        </div>
        <div class="article">
            <img src="./assets/articlecitron.png" alt="commandez des citrons">
            <input type="text" name="Article article_quantite_4" id="article_quantite_4">
        </div>
        <div class="divider-horizontal"></div>
    </div> -->
    <div class="formcommande">
        <div class="form-section informations">
            <h3 class="descript">Vos informations</h3>
            <div class="element">
                <label for="nom">Nom</label>
                <input type="text" id="nom">
            </div>
            <div class="element">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom">
            </div>
            <div class="element">
                <label for="email">E-mail</label>
                <input type="email" id="email">
            </div>
        </div>
        <div class="divider-vertical"></div>
        <div class="form-section livraison">
            <h3 class="descript">Livraison</h3>
            <div class="element">
                <label for="adresse">Adresse de livraison</label>
                <input type="text" id="adresse">
            </div>
            <div class="element">
                <label for="postal">Code postal</label>
                <input type="text" id="postal">
            </div>
            <div class="element">
                <label for="ville">Ville</label>
                <input type="text" id="ville">
            </div>
        </div>
        <!-- <input type="submit" value="Commander" />   -->
    </div>
</form>