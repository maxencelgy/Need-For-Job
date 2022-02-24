<style>
    .cv_entier {
        background-color: grey;
        width: 100%;
        max-width: 1400px;
        margin: auto;
        border: 2px solid black;
        border-radius: .3rem;
    }

    .cv_entier h2 {
        font-weight: 900;
    }

    .en_tete_cv {
        margin-top: 2rem;
        display: flex;
        justify-content: space-between;

    }

    .imgProfil {
        width: 200px;
        height: 150px;
        margin-right: 3rem;
    }

    .imgProfil img {
        width: 100%;
    }

    .info_perso_cv {
        margin-left: 2rem;
    }

    .formation_cv {
        padding-top: 3rem;
    }

    .formation_cv h1 {
        border-bottom: 3px solid red;
        margin-left: 2rem;
        margin-right: 2rem;
        padding-bottom: 1rem;
        font-weight: 800;
    }

    .date_and_forma {
        display: flex;
        justify-content: space-between;
    }

    .date_formation_cv {
        padding-top: 2rem;
        margin-left: 2rem;
        line-height: 4rem;
    }

    .formation_faites_cv {
        padding-top: 2rem;
        margin-right: 2rem;
        line-height: 2.5rem;
    }

    .experience_pro h1 {
        border-bottom: 3px solid red;
        margin-left: 2rem;
        margin-right: 2rem;
        padding-bottom: 1rem;
        font-weight: 800;
    }

    .date_and_exp {
        display: flex;
        justify-content: space-between;
        margin-left: 2rem;
        margin-right: 2rem;
        padding-bottom: 2rem;
    }

    .date_experience {
        padding-top: 2rem;
        line-height: 4rem;
    }

    .experience {
        padding-top: 2rem;
        line-height: 2.5rem;
    }

    .maitrise_langues h1 {
        border-bottom: 3px solid red;
        margin-left: 2rem;
        margin-right: 2rem;
        padding-bottom: 1rem;
        font-weight: 800;
    }

    .langues_and_niveau {
        display: flex;
        justify-content: space-between;
        margin-left: 2rem;
        margin-right: 2rem;
        padding-bottom: 2rem;
        padding-top: 3rem;
        line-height: 3rem;
    }

    .loisirs h1 {
        border-bottom: 3px solid red;
        margin-left: 2rem;
        margin-right: 2rem;
        padding-bottom: 1rem;
        font-weight: 800;
    }

    .loisirs p {
        margin-left: 2rem;
        padding-top: 2rem;
        font-weight: 900;
    }
</style>
<?php

global $wpdb;
$cv = $wpdb->get_results(
    $wpdb->prepare("SELECT * FROM {$wpdb->prefix}cv WHERE id=%s", $id),
    ARRAY_A
);
$cvFormation = $wpdb->get_results(
    $wpdb->prepare("SELECT * FROM {$wpdb->prefix}formation WHERE cv_id=%s", $id),
    ARRAY_A
);
$cvExperience = $wpdb->get_results(
    $wpdb->prepare("SELECT * FROM {$wpdb->prefix}experience WHERE cv_id=%s", $id),
    ARRAY_A
);
$cvLoisir = $wpdb->get_results(
    $wpdb->prepare("SELECT * FROM {$wpdb->prefix}passion WHERE cv_id=%s", $id),
    ARRAY_A
);
$cvLangue = $wpdb->get_results(
    $wpdb->prepare("SELECT * FROM {$wpdb->prefix}langue WHERE cv_id=%s", $id),
    ARRAY_A
);

?>

<?php
if (!empty($cv)) { ?>
    <section class="cv_entier">
        <div id="invoice">
            <div class="en_tete_cv">
                <div class="info_perso_cv">
                    <?php if (!empty($cv)) { ?>
                        <h1 id="Nom"><?= $cv[0]['nom'] ?> <?= $cv[0]['prenom'] ?></h1>
                    <?php } else {
                        ?> <h1 id="Nom"></h1> <?php } ?>
                    <p id="Date_de_naissance"><?= $cv[0]['dob'] ?></p>
                    <br>
                    <p id="adresse"><?= $cv[0]['adresse'] ?></p>

                    <p id="numero"><?= $cv[0]['phone'] ?></p>

                    <p id="adresse_mail"><?= $cv[0]['email'] ?></p>
                    <br>
                    <p id="permis"><?= $cv[0]['permis'] ?></p>
                </div>
                <div class="imgProfil">
                    <h2 id="Poste"><?= $cv[0]['poste'] ?></h2>
                </div>
            </div>
            <div class="formation_cv">
                <h1>Les Formations</h1>
                <div class="date_and_forma">
                    <div class="date_formation_cv">
                        <?php
                        foreach ($cvFormation as $cvFormations) {
                            ?>
                            <p><?= $cvFormations['date_formation'] ?></p>
                        <?php } ?>
                    </div>
                    <div class="formation_faites_cv">
                        <?php
                        foreach ($cvFormation as $cvFormations) {
                            ?>
                            <h2><?= $cvFormations['formation'] ?></h2>
                        <?php } ?>

                    </div>
                </div>
            </div>
            <div class="experience_pro">
                <h1>Experience professionelle</h1>
                <div class="date_and_exp">
                    <div class="date_experience">
                        <?php
                        foreach ($cvExperience as $cvExperiences) {
                            ?>
                            <p><?= $cvExperiences['date_experience'] ?></p>
                        <?php } ?>

                    </div>
                    <div class="experience">
                        <?php
                        foreach ($cvExperience as $cvExperiences) {
                            ?>
                            <h2><?= $cvExperiences['experience'] ?></h2>
                        <?php } ?>

                    </div>
                </div>
            </div>
            <div class="loisirs">
                <h1>Loisirs</h1>
                <?php
                foreach ($cvLoisir as $cvLoisirs) {
                    ?>
                    <p><?= $cvLoisirs['passion'] ?></p>
                <?php } ?>

            </div>
            <div class="maitrise_langues">
                <h1>Langues étrangères</h1>
                <div class="langues_and_niveau">
                    <div class="langues">
                        <?php
                        foreach ($cvLangue as $cvLangues) {
                            ?>
                            <p><?= $cvLangues['langue'] ?></p>
                        <?php } ?>
                    </div>
                    <div class="niveau_langues">
                        <?php
                        foreach ($cvLangue as $cvLangues) {
                            ?>
                            <p><?= $cvLangues['niveau_langue'] ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php } else { ?>
    <section class="cv_entier">
        <div id="invoice">
            <div class="en_tete_cv">
                <div class="info_perso_cv">
                    <h1 id="Nom"></h1>
                    <p id="Date_de_naissance"></p>
                    <br>
                    <p id="adresse"></p>
                    <p id="adresse_two"></p>
                    <p id="numero"></p>
                    <p id="adresse_mail"></p>
                    <br>
                    <p id="permis"></p>
                </div>
                <div class="imgProfil">
                    <h2 id="Poste"></h2>
                </div>
            </div>
            <div class="formation_cv">
                <h1>Les Formations</h1>
                <div class="date_and_forma">
                    <div class="date_formation_cv">

                    </div>
                    <div class="formation_faites_cv">

                    </div>
                </div>
            </div>
            <div class="experience_pro">
                <h1>Experience professionelle</h1>
                <div class="date_and_exp">
                    <div class="date_experience">

                    </div>
                    <div class="experience">

                    </div>
                </div>
            </div>
            <div class="loisirs">
                <h1>Loisirs</h1>
            </div>
            <div class="maitrise_langues">
                <h1>Langues étrangères</h1>
                <div class="langues_and_niveau">
                    <div class="langues"></div>
                    <div class="niveau_langues"></div>
                </div>
            </div>
        </div>
    </section>
    <?php
}
?>





