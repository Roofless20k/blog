<?php //



/**
 * saudacao
 *
 * @return string
 */
function saudacao(): string
{

    date_default_timezone_set('America/New_York');

    $hora = date('H');

    if ($hora >= 0 and $hora <= 5) {
        $saudacao = 'boa madrugada';
    } elseif ($hora >= 6 and $hora <= 12) {
        $saudacao = 'bom dia';
    } elseif ($hora >= 13 and $hora <= 18) {
        $saudacao = 'boa tarde';
    } else {
        $saudacao = 'boa noite';
    }


    return $saudacao;
}

/**
 * 
 * Resume um texto 
 * 
 * @param string $texto text to resume
 * @param int $limite ammount of chars allowed
 * @param string $continue optional - what to show after resumed text
 * 
 * @return string texto resumido
 */

function resumirTexto(string $texto, int $limite, string $continue = '...'): string
{
    //removes any html tags and spaces at start and end of the string
    $textoLimpo = trim(strip_tags($texto));

    if ($textoLimpo <= $limite) { //checks if char limit($limit) is exceeded
        return $textoLimpo; //if true return it
    }

    $resumirTexto = mb_substr($textoLimpo, 0, $limite);

    return $resumirTexto . ' ' . $continue;
}