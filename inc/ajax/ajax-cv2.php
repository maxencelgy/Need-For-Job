<?php

// action : "ajax_contact2"
add_action('wp_ajax_ajax_contact_2', 'gestionFormulaireContact2');
add_action('wp_ajax_ajax_contact_3', 'gestionFormulaireContact2');

add_action('wp_ajax_nopriv_ajax_contact_2', 'gestionFormulaireContact3');
add_action('wp_ajax_nopriv_ajax_contact_3', 'gestionFormulaireContact3');



function gestionFormulaireContact2()
{

    $success = false;
    $userId = cleanXss('userId');
    $nom = cleanXss('nom');
    $prenom = cleanXss('prenom');
    $dob = cleanXss('dob');
    $lieux = cleanXss('lieux');
    $number = cleanXss('number');
    $mail = cleanXss('mail');
    $perms = cleanXss('perms');
    $dateFormation = cleanXss('dateFormation');
    $formation = cleanXss('formation');
    $dateExp = cleanXss('dateExp');
    $experience = cleanXss('experience');
    $langue = cleanXss('langue');
    $niveau = cleanXss('niveau');
    $loisir = cleanXss('loisir');

    global $wpdb;
    $wpdb->insert(
        $wpdb->prefix . 'cv',
        array(
            'user_id' => $userId,
            'nom'    => $nom,
            'prenom'    => $prenom,
            'dob'      => $dob,
            'adresse'    => $lieux,
            'phone' => $number,
            'email' => $mail,
            'permis' => $perms,
            'date-formation' => $dateFormation,
            'formation' => $formation,
            'date-experience' => $dateExp,
            'experience' => $experience,
            'langue' => $langue,
            'niveau' => $niveau,
            'loisirs' => $loisir,
        ),
        array('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')

    );

    $success = true;

    $data = array(
        'success' => $success
    );
    showJson($data);
}


