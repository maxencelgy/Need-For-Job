<?php
session_start();
get_header();
?>
<style>
  #cv_entier {
    background-color: aliceblue;
    width: 100%;
    max-width: 1400px;
    margin: auto;
    border: 2px solid black;
  }

  #cv_entier h2 {
    font-weight: 900;
  }

  .en_tete_cv {
    margin-top: 2rem;
    display: flex;
    justify-content: space-between;
    padding-top: 2rem;
  }

  .info_perso_cv {
    margin-left: 2rem;
  }

  .photo_cv img {
    width: 300px;
    margin-right: 2rem;
  }

  .formation_cv {
    padding-top: 3rem;
  }

  .formation_cv h1 {
    border-bottom: 3px solid #ea4c88;
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

  .experience_pro {}

  .experience_pro h1 {
    border-bottom: 3px solid #ea4c88;
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

  .maitrise_langues {}

  .maitrise_langues h1 {
    border-bottom: 3px solid #ea4c88;
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

  .niveau_langues {}

  .loisirs h1 {
    border-bottom: 3px solid #ea4c88;
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

<body>
  <section id="cv_entier">
    <div class="en_tete_cv">
      <div class="info_perso_cv">
        <h1 id="Nom">Maxence Legay</h1>
        <p id="Date_de_naissance">Né le 01/02/2003</p>
        <br>
        <p id="adresse">Impasse des gay </p>
        <p id="adresse_two">Rouen 76000</p>
        <p id="numero">06.70.50.61.70</p>
        <p id="adresse_mail">MaxenceLeGay@gmail.com</p>
        <br>
        <p id="permis">Permis B (voiture)</p>
      </div>
      <div class="photo_cv">
        <img src="https://th.bing.com/th/id/R.f0fdbe409055da5ad7edddf36cdd6326?rik=2mbqAXK6dzGz6A&riu=http%3a%2f%2fimg.20mn.fr%2ffRtrk_A1S_2T36rqYCa1eQ%2f2048x1536-fit_maitre-gims-nrj-music-awards-12-novembre-2016-cannes.jpg&ehk=DijO9ATnI0n6R9pp2gzT1wgsaHyloUQ4dSTwGq0%2fPng%3d&risl=&pid=ImgRaw&r=0" alt="">
      </div>
    </div>
    <div class="formation_cv">
      <h1>Les Formations</h1>
      <div class="date_and_forma">
        <div class="date_formation_cv">
          <p>2021-2022</p>
          <p>2020-2021</p>
          <p>2019-2020</p>
        </div>
        <div class="formation_faites_cv">
          <h2>Need For School - Campus St Marc, Rouen</h2>
          <p>Bachelor informatique</p>
          <h2>Lycée je sais pas du tout</h2>
          <p>Bac Stmg</p>
          <h2>Conducteur poids lourds</h2>
          <p>sa grosse daronne</p>
        </div>
      </div>
    </div>
    <div class="experience_pro">
      <h1>Experience professionelle</h1>
      <div class="date_and_exp">
        <div class="date_experience">
          <p>2021-2022</p>
          <p>2020-2021</p>
          <p>2019-2020</p>
        </div>
        <div class="experience">
          <h2>Chargé de Projet</h2>
          <p>J'avais pour rôle de diriger un group de personne afin d'établir un objectif</p>
          <h2>Maxencelgy.fr</h2>
          <p>J'ai créée un site e-commerce disponible dans toute la France Metropolitaine</p>
          <h2>La Vacuna Del Sol</h2>
          <p>Site de carnet de vaccination</p>
        </div>
      </div>
    </div>
    <div class="maitrise_langues">
      <h1>Langues étrangères</h1>
      <div class="langues_and_niveau">
        <div class="langues">
          <p>Anglais</p>
          <p>Espagnol</p>
          <p>Latin</p>
          <p>PHP</p>
          <p>HTML</p>
          <p>CSS</p>
          <p>React.Js</p>
          <p>Javascript</p>
        </div>
        <div class="niveau_langues">
          <h2>Niveau A2</h2>
          <h2>Correct</h2>
          <h2>Correct</h2>
          <h2>Bon</h2>
          <h2>Très bon</h2>
          <h2>Très bon</h2>
          <h2>Correct</h2>
          <h2>Correct</h2>
        </div>
      </div>
      <div class="loisirs">
        <h1>Loisirs</h1>
        <p>Les Meufs</p>
        <p>L'alcool</p>
        <p>La drogue</p>
        <p>L'informatique</p>
      </div>
  </section>
</body>

</html>