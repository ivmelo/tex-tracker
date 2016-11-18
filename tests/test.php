<?php

require dirname(__DIR__).'/vendor/autoload.php';

error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

use Ivmelo\Tracker\TEXTracker;

/**
 * Para conseguir o código do pacote siga os seguintes passos:
 * 1 - Acesse http://tracking.totalexpress.com.br/tracking/0
 * 2 - Preencha o form com os seus dados
 * 3 - Clique no pacote que deseja rastrear
 * 4 - Na url do rastreio, basta encontrar o conteudo após "?code="
 *
 * Below are some example codes.
**/
$code1 = 'fG9x0C2oWDtDOs0iQwI8hNUbF%2FghmEQnaMQ63nEXk4CCFnZhz5R2r1XEPqx0eoGWvERcPl4JsiUR4H%2BcvN0OiZkbXgXgVbMFtkbLCq788YTiBcNgwXhTtzKnlxFMLreGOkfLme46KTIMkLYxgyXXae%2BLTC0%3D';
$code2 = 'oBCrfkeLQ0Eyik8JfNwXUlgW9GsqpOiSsGdeZf2Jx42AnGBQ2HIZR61etYKoMt2rxD4BGjWuWxA8r2INQ300ilOz1RJyn5T6dfTAgWm1OxLvVLKdlo29eTxDFNVlQ56gCmEm%2FqP%2Bi30OlWAiC0S8o8bh0aI%3D#n';

$tracker = new TEXTracker($code2);

var_dump($tracker->track());

// print $endpoint . $code2 . "\n";
