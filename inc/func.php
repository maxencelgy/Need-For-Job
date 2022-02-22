<?php

//FONCTIONS BASIQUES DE BASE (Ne pas toucher)
function debug($tableau)
{
    echo '<pre style="height:200px;overflow-y:scroll;font-size:.7rem;padding:.6rem;font-family: Consolas,Monospace;background-color: black;color:#33d00c;">';
    print_r($tableau);
    echo '</pre>';
};

function asset($file)
{
    return get_template_directory_uri() . '/asset/' . $file;
}

function path($lien)
{
    return esc_url(home_url($lien));
}

function getImageFeatured($id, $size = 'thumbnail', $alt = '')
{
    $image_url = get_the_post_thumbnail_url($id, $size);
    if (!empty($image_url)) {
        return '<img src="' . $image_url . '" alt="' . $alt . '"/>';
    }
    return '<img src="' . asset('/biche.jpeg') . '" width="300px" height="200px" />';
}


function dateFormat($data, string $format = 'd/m/Y à H:i'): string
{
    if ($data == null) {
        return '';
    }
    return date($format, strtotime($data));
}
function dateFormatWithoutHour($data, string $format = 'd/m/Y'): string
{
    if (strtotime($data) != NULL) {
        return date($format, strtotime($data));
    } else {
        return '';
    }
}

function selectValidation($errors, $value, $key)
{
    if (empty($value)) {
        $errors[$key] = "Veuillez renseigner un état";
    }
}

function textValidation($errors, $value, $key, $min = 0, $max = 500)
{
    if (!empty($value)) {
        if (mb_strlen($value) < $min) {
            $errors[$key] = 'Veuillez renseigner au minimum ' . $min . ' caractères';
        } elseif (mb_strlen($value) > $max) {
            $errors[$key] = 'Veuillez renseigner au maximum ' . $max . ' caractères ';
        }
    } else {
        $errors[$key] = 'Veuillez renseigner ce champ';
    }
    return $errors;
}


function intValidation($errors, $value, $key)
{
    if (!empty($value)) {
        if (!is_int($key)) {
            $errors[$key] = "Veuillez renseigner un entier";
        }
    }
    return $errors;
}


function mailValidation($errors, $value, $key)
{
    if (!empty($value)) {
        if (filter_var($value, FILTER_VALIDATE_EMAIL) == false) {
            $errors[$key] = 'Veuillez renseigner un email valide';
        }
    } else {
        $errors[$key] = 'Veuillez renseigner ce champ';
    }
    return $errors;
}

function phoneNumberValidation($errors, $value, $key)
{
    if (!empty($value)) {
        $regex = '#^0[6-7]{1}\d{8}$#';
        if (!preg_match($regex, $value)) {
            $errors[$key] = "Veuillez renseigner un numéro valide";
        }
    }
    return $errors;
}

function cleanXss($key)
{
    return trim(strip_tags($_POST[$key]));
}

function recupInputValue($key)
{
    if (!empty($_POST[$key])) {
        echo $_POST[$key];
    }
}

function viewError($errors, $key)
{
    if (!empty($errors[$key])) {
        echo $errors[$key];
    }
}
//

function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function verifUserConnected()
{
    if (isLogged() == false) {
        wp_redirect(path('home'));
    }
}
function verifUserConnectedAdmin()
{
    if (isAdmin() == false) {
        wp_redirect(path('404'));
    }
}
function verifUserConnectedAdminTables()
{
    if (isAdmin() == false) {
        wp_redirect(path('home'));
    }
}

function verifUserAlreadyConnected()
{
    if (isLogged() == true) {
        wp_redirect(path('home'));
    } else {
    }
}



function isLogged()
{
    if (!empty($_SESSION['user'])) {
        if (!empty($_SESSION['user']['id'])) {
            if(!empty($_SESSION['user']['pseudo'])){
                if (!empty($_SESSION['user']['email'])) {
                    if (!empty($_SESSION['user']['status'])) {
                        if (!empty($_SESSION['user']['ip'])) {
                           echo'niquel';
                        }
                    }
                }
            }
        }
    }
    echo 'erreur';
    return false;
}

function isAdmin()
{
    if (isLogged()) {
        if ($_SESSION['user']['status'] == 'admin') {
            return true;
        }
    }
    return false;
}

function getImageAttachment($id_attachment, $size = 'thumbnail', $alt = '')
{
    $image = wp_get_attachment_image_src($id_attachment, $size);
    if (!empty($image)) {
        return '<img src="' . $image[0] . '" alt="' . $alt . '"/>';
    }
    return '';
}


// AJAX

function validText($errors, $data, $key, $min = 2, $max = 50)
{
    if (!empty($data)) {
        if (mb_strlen($data) < $min) {
            $errors[$key] = 'min ' . $min . ' caractères';
        } elseif (mb_strlen($data) > $max) {
            $errors[$key] = 'max ' . $max . ' caractères';
        }
    } else {
        $errors[$key] = 'Veuillez renseigner ce champ';
    }
    return $errors;
}


function validEmail($errors, $data, $key)
{
    if (!empty($data)) {
        if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
            $errors[$key] = 'Veuillez renseigner un email valide';
        }
    } else {
        $errors[$key] = 'Veuillez renseigner un email';
    }
    return $errors;
}


function showJson($data)
{
    header("Content-type: application/json");
    $json = json_encode($data, JSON_PRETTY_PRINT);
    if ($json) {
        die($json);
    } else {
        die('error in json encoding');
    }
}

function wpdocs_custom_login($login,$password) {
    $creds = array(
        'user_login'    => $login,
        'user_password' => $password,
        'remember'      => true
    );
    $user = wp_signon( $creds, false );

    if ( is_wp_error( $user ) ) {
        return $user->get_error_message();
    }
}

function objectToArray ($object) {
    if(!is_object($object) && !is_array($object)){
        return $object;
    }
    return array_map('objectToArray', (array) $object);
}
