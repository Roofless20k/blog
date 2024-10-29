<?php

//code to make form data permanent on the page for user ease of use

//check if a var was received via post method. if not set it to ''.
$old_input = $_POST['some_form_input'] ?? '';

//inside a form input, the value would be made dinamic to receive one of the two options above
//never forget to sanitize user data put back into the page XXS = bad

/* 
    <form method="post">
        <input type="text" name="input1" value="<?= htmlspecialchars($old_input) ?>"/>
        <input type="submit" />
    </form> 
*/


//adding an escape button in a form to exit the page/relocate w/o filling in the form w/ a lil' JS
/*  
        //RETURN FALSE KEEPS FORM FROM SUBMITTING
        <input type="button" value="ESCAPE" onclick="location.href='http://www.wa4e.com/'; return false;"/>
    
*/




function contarTempo(string $data)
{
    $agora = strtotime(date('Y-m-d H:i:s'));

    $antes = strtotime($data);

    $diferenca = $agora - $antes;

    $segundos = $diferenca;

    $minutos = round($segundos / 60);


    $horas =  round($minutos / 60);


    $dias =  round($horas / 24);


    $semanas =  round($dias / 7);


    $meses =  round($semanas / 4);


    $anos =  $meses / 12;

    echo $segundos, ' segundos <hr>', $minutos, ' minutos <hr>', $horas, ' horas <hr>', $dias, ' dias <hr>', $semanas, ' semanas <hr>', $meses, ' meses <hr>', $anos, ' anos <hr>';
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
