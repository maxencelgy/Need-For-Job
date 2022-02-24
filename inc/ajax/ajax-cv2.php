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

    $success = false;
    $userId = cleanXss('userId');
    $themeId = cleanXss('themeId');
    $poste = cleanXss('poste');

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
        ),
        array('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')

    );

    $lastCv = $wpdb->get_results(
        $wpdb->prepare("SELECT * FROM {$wpdb->prefix}cv WHERE user_id=%s ORDER BY id DESC", $userId),
        ARRAY_A
    );

    $cvId=$lastCv[0]['id'];

    foreach (array_combine($data['d'][0]['formation'], $data['d'][0]['dateVal']) as $formationn => $formationDate) {
        global $wpdb;
        $wpdb->insert(
            $wpdb->prefix . 'formation',
            array(
                'cv_id' => $cvId,
                'formation' => $formationn,
                'date_formation' => $formationDate,
            ),
            array('%s', '%s', '%s')
        );
    }

    foreach (array_combine($data['d'][0]['experienceVal'], $data['d'][0]['dateExp']) as $formationn => $formationDate) {
        global $wpdb;
        $wpdb->insert(
            $wpdb->prefix . 'experience',
            array(
                'cv_id' => $cvId,
                'experience' => $formationn,
                'date_experience' => $formationDate,
            ),
            array('%s', '%s', '%s')
        );
    }

    foreach (array_combine($data['d'][0]['langue'], $data['d'][0]['niveau']) as $formationn => $formationDate) {
        global $wpdb;
        $wpdb->insert(
            $wpdb->prefix . 'langue',
            array(
                'cv_id' => $cvId,
                'langue' => $formationn,
                'niveau_langue' => $formationDate,
            ),
            array('%s', '%s', '%s')
        );
    }

    foreach ($data['d'][0]['loisir'] as $loisirs) {
        global $wpdb;
        $wpdb->insert(
            $wpdb->prefix . 'passion',
            array(
                'cv_id' => $cvId,
                'passion' => $loisirs,
            ),
            array('%s', '%s')
        );
    }

    $success = true;
    $dataa = array(
        'success' => $success
    );
    showJson($data);
}
