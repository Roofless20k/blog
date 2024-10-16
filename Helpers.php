<?php //


function contarTempo(string $data)  
{
    var_dump($data);    
}

/**
 * formatarValor
 * takes a number and formats it in the US currency format with 2 floats. 
 * @param  mixed $valor
 * @return string because it can be used to concatenate to another string to output to users.
 */
function formatarValor(float $valor = null): string
{
    return 'The formated valor  is $' . number_format($valor ? $valor : 0, 2, '.', ',');
}

/**
 * formatarNumero
 * takes a number and formats with 2 floats. 
 * @param  mixed $numero
 * @return string
 */
function formatarNumero(int $numero = null): string
{
    return number_format($numero ?: 0, 0, ".");
}


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
