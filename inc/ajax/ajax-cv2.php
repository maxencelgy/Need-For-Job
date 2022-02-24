<?php

// action : "ajax_contact2"
add_action('wp_ajax_ajax_contact_2', 'gestionFormulaireContact2');
add_action('wp_ajax_nopriv_ajax_contact_2', 'gestionFormulaireContact2');



function gestionFormulaireContact2()
{
    $y = json_decode(stripcslashes($_POST['dataaa']), true);

    $data = array(
        'd' => $y,
    );

    // debug($data);
    // showJson($data);

    $success = false;
    $userId = cleanXss('userId');
    $themeId = cleanXss('themeId');
    $poste = cleanXss('poste');
    // $nom = cleanXss('nom');
    // $prenom = cleanXss('prenom');
    // $dob = cleanXss('dob');
    // $lieux = cleanXss('lieux');
    // $number = cleanXss('number');
    // $mail = cleanXss('mail');
    // $perms = cleanXss('perms');
    // $dateFormation = cleanXss('dateFormation');
    // $formation = cleanXss('formation');
    // $dateExp = cleanXss('dateExp');
    // $experience = cleanXss('experience');
    // $langue = cleanXss('langue');
    // $niveau = cleanXss('niveau');
    // $loisir = cleanXss('loisir');

    global $wpdb;
    $wpdb->insert(
        $wpdb->prefix . 'cv',
        array(
            'user_id' => $userId,
            'template-id' => $themeId,
            'poste' => $poste,
            'nom'   => $data['d'][0]['name'],
            'prenom'    => $data['d'][0]['prenom'],
            'dob'      => $data['d'][0]['dob'],
            'adresse'    => $data['d'][0]['lieux'],
            'phone' => $data['d'][0]['number'],
            'email' => $data['d'][0]['mail'],
            'permis' => $data['d'][0]['perms'],
            // 'date-formation' => $dateFormation,
            // 'formation' => $formation,
            // 'date-experience' => $dateExp,
            // 'experience' => $experience,
            // 'langue' => $langue,
            // 'niveau' => $niveau,
            // 'loisirs' => $loisir,
        ),
        array('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')
        // array('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')

    );


     $lastCv= $wpdb->get_results(
        $wpdb->prepare("SELECT * FROM {$wpdb->prefix}cv WHERE user_id=%s ORDER BY id DESC",$userId),
        ARRAY_A
    );

    $cvId=$lastCv[0]['id'];


    // foreach($formations as $formation){

    // }
    global $wpdb;
    $wpdb->insert( 
        $wpdb->prefix . 'formation',
        array(
            'cv_id' => $cvId,
            'formation'=>$data['d'][0]['name'],
        ),
        array('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')
        // array('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')

    );


    $success = true;

    $dataa = array(
        'success' => $success
    );
    showJson($data);
}
