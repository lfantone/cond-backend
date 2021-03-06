<?

ini_set('session.gc_maxlifetime',8*60*60);
ini_set('session.gc_probability',1);
ini_set('session.gc_divisor',1);

date_default_timezone_set('America/Argentina/Buenos_Aires');

session_start();

checkHash();

$goto = $_SERVER["REQUEST_URI"];

$admin = $_SESSION["admin"];
$msg = $_GET["msg"];
$current_uri = $_SERVER['REQUEST_URI'];
$current_script = $_SERVER['SCRIPT_NAME'];
$referer = $_SERVER['HTTP_REFERER'];

if ($_SERVER['HTTP_X_FORWARD_FOR']) {
  $user_ip = $_SERVER['HTTP_X_FORWARD_FOR'];
} else {
  $user_ip = $_SERVER['REMOTE_ADDR'];
}

function clean_string($text){
  //$text = htmlspecialchars($text, ENT_QUOTES);
  $text = mysql_real_escape_string($text);
  return $text;
}

function toChars($mixVal) {
  if (is_array($mixVal)) {
    foreach ($mixVal as $indx => $mixValVal) {
      $mixVal[$indx] = toChars($mixValVal);
    }
  } else {
    $mixVal = put_entities($mixVal);
  }
  return $mixVal;
}


function put_entities($string) {
  $new = array(
'&#162;','&#163;','&#164;','&#165;','&#166;','&#167;','&#168;','&#169;','&#170;','&#171;','&#171;','&#172;','&#174;','&#175;','&#176;','&#177;','&#178;','&#179;','&#180;','&#181;','&#182;','&#183;','&#184;','&#185;','&#186;','&#187;','&#187;','&#188;','&#189;','&#190;','&#191;','&#192;','&#193;','&#194;','&#195;','&#196;','&#197;','&#198;','&#199;','&#200;','&#201;','&#202;','&#203;','&#204;','&#205;','&#206;','&#207;','&#208;','&#209;','&#210;','&#211;','&#212;','&#213;','&#214;','&#215;','&#216;','&#217;','&#218;','&#219;','&#220;','&#221;','&#222;','&#223;','&#224;','&#225;','&#226;','&#227;','&#228;','&#229;','&#230;','&#231;','&#232;','&#233;','&#234;','&#235;','&#236;','&#237;','&#238;','&#239;','&#240;','&#241;','&#242;','&#243;','&#244;','&#245;','&#246;','&#247;','&#248;','&#249;','&#250;','&#251;','&#252;','&#253;','&#254;','&#255;','&#39;','&#37;','&#36;','&#8211;'
  );
  $old = array(
'¢','£','¤','¥','¦','§','¨','©','ª','«','«','¬','®','¯','°','±','²','³','´','µ','¶','·','¸','¹','º','»','»','¼','½','¾','¿','À','Á','Â','Ã','Ä','Å','Æ','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ð','Ñ','Ò','Ó','Ô','Õ','Ö','×','Ø','Ù','Ú','Û','Ü','Ý','Þ','ß','à','á','â','ã','ä','å','æ','ç','è','é','ê','ë','ì','í','î','ï','ð','ñ','ò','ó','ô','õ','ö','÷','ø','ù','ú','û','ü','¦','þ','ÿ',"'",'%','$','–'
  );
  return str_replace($old, $new, $string);
}

function unentities($string) {
  $old = array(
'&#160;','&#161;','&#162;','&#163;','&#164;','&#165;','&#166;','&#167;','&#168;','&#169;','&#170;','&#171;','&#171;','&#172;','&#174;','&#175;','&#176;','&#177;','&#178;','&#179;','&#180;','&#181;','&#182;','&#183;','&#184;','&#185;','&#186;','&#187;','&#187;','&#188;','&#189;','&#190;','&#191;','&#192;','&#193;','&#194;','&#195;','&#196;','&#197;','&#198;','&#199;','&#200;','&#201;','&#202;','&#203;','&#204;','&#205;','&#206;','&#207;','&#208;','&#209;','&#210;','&#211;','&#212;','&#213;','&#214;','&#215;','&#216;','&#217;','&#218;','&#219;','&#220;','&#221;','&#222;','&#223;','&#224;','&#225;','&#226;','&#227;','&#228;','&#229;','&#230;','&#231;','&#232;','&#233;','&#234;','&#235;','&#236;','&#237;','&#238;','&#239;','&#240;','&#241;','&#242;','&#243;','&#244;','&#245;','&#246;','&#247;','&#248;','&#249;','&#250;','&#251;','&#252;','&#253;','&#254;','&#255;','&#39;','&#37;','&#36;','&#8211;'
  );
  $new = array(
' ','¡','¢','£','¤','¥','¦','§','¨','©','ª','«','«','¬','®','¯','°','±','²','³','´','µ','¶','·','¸','¹','º','»','»','¼','½','¾','¿','À','Á','Â','Ã','Ä','Å','Æ','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ð','Ñ','Ò','Ó','Ô','Õ','Ö','×','Ø','Ù','Ú','Û','Ü','Ý','Þ','ß','à','á','â','ã','ä','å','æ','ç','è','é','ê','ë','ì','í','î','ï','ð','ñ','ò','ó','ô','õ','ö','÷','ø','ù','ú','û','ü','¦','þ','ÿ',"'",'%','$','–'
  );
  return str_replace($old, $new, $string);
}

/*
function unentities2($string) {
  return str_replace($old, $new, $string);
  return preg_replace_callback('/&([0-9]+);/',
                               'unconvert_entity', $string);
}

function unconvert_entity($matches) {

  $old = array(
'&#160;','&#161;','&#162;','&#163;','&#164;','&#165;','&#166;','&#167;','&#168;','&#169;','&#170;','&#171;','&#171;','&#172;','&#174;','&#175;','&#176;','&#177;','&#178;','&#179;','&#180;','&#181;','&#182;','&#183;','&#184;','&#185;','&#186;','&#187;','&#187;','&#188;','&#189;','&#190;','&#191;','&#192;','&#193;','&#194;','&#195;','&#196;','&#197;','&#198;','&#199;','&#200;','&#201;','&#202;','&#203;','&#204;','&#205;','&#206;','&#207;','&#208;','&#209;','&#210;','&#211;','&#212;','&#213;','&#214;','&#215;','&#216;','&#217;','&#218;','&#219;','&#220;','&#221;','&#222;','&#223;','&#224;','&#225;','&#226;','&#227;','&#228;','&#229;','&#230;','&#231;','&#232;','&#233;','&#234;','&#235;','&#236;','&#237;','&#238;','&#239;','&#240;','&#241;','&#242;','&#243;','&#244;','&#245;','&#246;','&#247;','&#248;','&#249;','&#250;','&#251;','&#252;','&#253;','&#254;','&#255;','&#39;','&#37;','&#36;','&#8211;'
  );
  $old = array_flip($old);

  $table = array(
' ','¡','¢','£','¤','¥','¦','§','¨','©','ª','«','«','¬','®','¯','°','±','²','³','´','µ','¶','·','¸','¹','º','»','»','¼','½','¾','¿','À','Á','Â','Ã','Ä','Å','Æ','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ð','Ñ','Ò','Ó','Ô','Õ','Ö','×','Ø','Ù','Ú','Û','Ü','Ý','Þ','ß','à','á','â','ã','ä','å','æ','ç','è','é','ê','ë','ì','í','î','ï','ð','ñ','ò','ó','ô','õ','ö','÷','ø','ù','ú','û','ü','¦','þ','ÿ',"'",'%','$','–'
  );

  // Entity not found? Destroy it.
  $result = isset($table[$old[$matches[1]]]) ? $table[$old[$matches[1]]] : '';
  return $result ;


}
*/

if(!$admin){
  if(!in_array($_SERVER['SCRIPT_NAME'], array("/backend/index.php","/backend/signin.php"))){
    header("Location: index.php?msg=session_expired&goto=$goto");
    exit;
  }
}

/* html_convert_entities($string) -- convert named HTML entities to
 * XML-compatible numeric entities.
 */

function html_convert_entities($string) {
  return preg_replace_callback('/&([a-zA-Z][a-zA-Z0-9]+);/',
                               'convert_entity', $string);
}

/* Swap HTML named entity with its numeric equivalent. If the entity
 * isn't in the lookup table, this function returns a blank, which
 * destroys the character in the output - this is probably the
 * desired behaviour when producing XML. */
function convert_entity($matches) {
  static $table = array('quot'    => '&#34;',
                        'amp'      => '&#38;',
                        'lt'       => '&#60;',
                        'gt'       => '&#62;',
                        'OElig'    => '&#338;',
                        'oelig'    => '&#339;',
                        'Scaron'   => '&#352;',
                        'scaron'   => '&#353;',
                        'Yuml'     => '&#376;',
                        'circ'     => '&#710;',
                        'tilde'    => '&#732;',
                        'ensp'     => '&#8194;',
                        'emsp'     => '&#8195;',
                        'thinsp'   => '&#8201;',
                        'zwnj'     => '&#8204;',
                        'zwj'      => '&#8205;',
                        'lrm'      => '&#8206;',
                        'rlm'      => '&#8207;',
                        'ndash'    => '&#8211;',
                        'mdash'    => '&#8212;',
                        'lsquo'    => '&#8216;',
                        'rsquo'    => '&#8217;',
                        'sbquo'    => '&#8218;',
                        'ldquo'    => '&#8220;',
                        'rdquo'    => '&#8221;',
                        'bdquo'    => '&#8222;',
                        'dagger'   => '&#8224;',
                        'Dagger'   => '&#8225;',
                        'permil'   => '&#8240;',
                        'lsaquo'   => '&#8249;',
                        'rsaquo'   => '&#8250;',
                        'euro'     => '&#8364;',
                        'fnof'     => '&#402;',
                        'Alpha'    => '&#913;',
                        'Beta'     => '&#914;',
                        'Gamma'    => '&#915;',
                        'Delta'    => '&#916;',
                        'Epsilon'  => '&#917;',
                        'Zeta'     => '&#918;',
                        'Eta'      => '&#919;',
                        'Theta'    => '&#920;',
                        'Iota'     => '&#921;',
                        'Kappa'    => '&#922;',
                        'Lambda'   => '&#923;',
                        'Mu'       => '&#924;',
                        'Nu'       => '&#925;',
                        'Xi'       => '&#926;',
                        'Omicron'  => '&#927;',
                        'Pi'       => '&#928;',
                        'Rho'      => '&#929;',
                        'Sigma'    => '&#931;',
                        'Tau'      => '&#932;',
                        'Upsilon'  => '&#933;',
                        'Phi'      => '&#934;',
                        'Chi'      => '&#935;',
                        'Psi'      => '&#936;',
                        'Omega'    => '&#937;',
                        'alpha'    => '&#945;',
                        'beta'     => '&#946;',
                        'gamma'    => '&#947;',
                        'delta'    => '&#948;',
                        'epsilon'  => '&#949;',
                        'zeta'     => '&#950;',
                        'eta'      => '&#951;',
                        'theta'    => '&#952;',
                        'iota'     => '&#953;',
                        'kappa'    => '&#954;',
                        'lambda'   => '&#955;',
                        'mu'       => '&#956;',
                        'nu'       => '&#957;',
                        'xi'       => '&#958;',
                        'omicron'  => '&#959;',
                        'pi'       => '&#960;',
                        'rho'      => '&#961;',
                        'sigmaf'   => '&#962;',
                        'sigma'    => '&#963;',
                        'tau'      => '&#964;',
                        'upsilon'  => '&#965;',
                        'phi'      => '&#966;',
                        'chi'      => '&#967;',
                        'psi'      => '&#968;',
                        'omega'    => '&#969;',
                        'thetasym' => '&#977;',
                        'upsih'    => '&#978;',
                        'piv'      => '&#982;',
                        'bull'     => '&#8226;',
                        'hellip'   => '&#8230;',
                        'prime'    => '&#8242;',
                        'Prime'    => '&#8243;',
                        'oline'    => '&#8254;',
                        'frasl'    => '&#8260;',
                        'weierp'   => '&#8472;',
                        'image'    => '&#8465;',
                        'real'     => '&#8476;',
                        'trade'    => '&#8482;',
                        'alefsym'  => '&#8501;',
                        'larr'     => '&#8592;',
                        'uarr'     => '&#8593;',
                        'rarr'     => '&#8594;',
                        'darr'     => '&#8595;',
                        'harr'     => '&#8596;',
                        'crarr'    => '&#8629;',
                        'lArr'     => '&#8656;',
                        'uArr'     => '&#8657;',
                        'rArr'     => '&#8658;',
                        'dArr'     => '&#8659;',
                        'hArr'     => '&#8660;',
                        'forall'   => '&#8704;',
                        'part'     => '&#8706;',
                        'exist'    => '&#8707;',
                        'empty'    => '&#8709;',
                        'nabla'    => '&#8711;',
                        'isin'     => '&#8712;',
                        'notin'    => '&#8713;',
                        'ni'       => '&#8715;',
                        'prod'     => '&#8719;',
                        'sum'      => '&#8721;',
                        'minus'    => '&#8722;',
                        'lowast'   => '&#8727;',
                        'radic'    => '&#8730;',
                        'prop'     => '&#8733;',
                        'infin'    => '&#8734;',
                        'ang'      => '&#8736;',
                        'and'      => '&#8743;',
                        'or'       => '&#8744;',
                        'cap'      => '&#8745;',
                        'cup'      => '&#8746;',
                        'int'      => '&#8747;',
                        'there4'   => '&#8756;',
                        'sim'      => '&#8764;',
                        'cong'     => '&#8773;',
                        'asymp'    => '&#8776;',
                        'ne'       => '&#8800;',
                        'equiv'    => '&#8801;',
                        'le'       => '&#8804;',
                        'ge'       => '&#8805;',
                        'sub'      => '&#8834;',
                        'sup'      => '&#8835;',
                        'nsub'     => '&#8836;',
                        'sube'     => '&#8838;',
                        'supe'     => '&#8839;',
                        'oplus'    => '&#8853;',
                        'otimes'   => '&#8855;',
                        'perp'     => '&#8869;',
                        'sdot'     => '&#8901;',
                        'lceil'    => '&#8968;',
                        'rceil'    => '&#8969;',
                        'lfloor'   => '&#8970;',
                        'rfloor'   => '&#8971;',
                        'lang'     => '&#9001;',
                        'rang'     => '&#9002;',
                        'loz'      => '&#9674;',
                        'spades'   => '&#9824;',
                        'clubs'    => '&#9827;',
                        'hearts'   => '&#9829;',
                        'diams'    => '&#9830;',
                        'nbsp'     => '&#160;',
                        'iexcl'    => '&#161;',
                        'cent'     => '&#162;',
                        'pound'    => '&#163;',
                        'curren'   => '&#164;',
                        'yen'      => '&#165;',
                        'brvbar'   => '&#166;',
                        'sect'     => '&#167;',
                        'uml'      => '&#168;',
                        'copy'     => '&#169;',
                        'ordf'     => '&#170;',
                        'laquo'    => '&#171;',
                        'not'      => '&#172;',
                        'shy'      => '&#173;',
                        'reg'      => '&#174;',
                        'macr'     => '&#175;',
                        'deg'      => '&#176;',
                        'plusmn'   => '&#177;',
                        'sup2'     => '&#178;',
                        'sup3'     => '&#179;',
                        'acute'    => '&#180;',
                        'micro'    => '&#181;',
                        'para'     => '&#182;',
                        'middot'   => '&#183;',
                        'cedil'    => '&#184;',
                        'sup1'     => '&#185;',
                        'ordm'     => '&#186;',
                        'raquo'    => '&#187;',
                        'frac14'   => '&#188;',
                        'frac12'   => '&#189;',
                        'frac34'   => '&#190;',
                        'iquest'   => '&#191;',
                        'Agrave'   => '&#192;',
                        'Aacute'   => '&#193;',
                        'Acirc'    => '&#194;',
                        'Atilde'   => '&#195;',
                        'Auml'     => '&#196;',
                        'Aring'    => '&#197;',
                        'AElig'    => '&#198;',
                        'Ccedil'   => '&#199;',
                        'Egrave'   => '&#200;',
                        'Eacute'   => '&#201;',
                        'Ecirc'    => '&#202;',
                        'Euml'     => '&#203;',
                        'Igrave'   => '&#204;',
                        'Iacute'   => '&#205;',
                        'Icirc'    => '&#206;',
                        'Iuml'     => '&#207;',
                        'ETH'      => '&#208;',
                        'Ntilde'   => '&#209;',
                        'Ograve'   => '&#210;',
                        'Oacute'   => '&#211;',
                        'Ocirc'    => '&#212;',
                        'Otilde'   => '&#213;',
                        'Ouml'     => '&#214;',
                        'times'    => '&#215;',
                        'Oslash'   => '&#216;',
                        'Ugrave'   => '&#217;',
                        'Uacute'   => '&#218;',
                        'Ucirc'    => '&#219;',
                        'Uuml'     => '&#220;',
                        'Yacute'   => '&#221;',
                        'THORN'    => '&#222;',
                        'szlig'    => '&#223;',
                        'agrave'   => '&#224;',
                        'aacute'   => '&#225;',
                        'acirc'    => '&#226;',
                        'atilde'   => '&#227;',
                        'auml'     => '&#228;',
                        'aring'    => '&#229;',
                        'aelig'    => '&#230;',
                        'ccedil'   => '&#231;',
                        'egrave'   => '&#232;',
                        'eacute'   => '&#233;',
                        'ecirc'    => '&#234;',
                        'euml'     => '&#235;',
                        'igrave'   => '&#236;',
                        'iacute'   => '&#237;',
                        'icirc'    => '&#238;',
                        'iuml'     => '&#239;',
                        'eth'      => '&#240;',
                        'ntilde'   => '&#241;',
                        'ograve'   => '&#242;',
                        'oacute'   => '&#243;',
                        'ocirc'    => '&#244;',
                        'otilde'   => '&#245;',
                        'ouml'     => '&#246;',
                        'divide'   => '&#247;',
                        'oslash'   => '&#248;',
                        'ugrave'   => '&#249;',
                        'uacute'   => '&#250;',
                        'ucirc'    => '&#251;',
                        'uuml'     => '&#252;',
                        'yacute'   => '&#253;',
                        'thorn'    => '&#254;',
                        'yuml'     => '&#255;'

                        );
  // Entity not found? Destroy it.
  $result = isset($table[$matches[1]]) ? $table[$matches[1]] : '';
  return $result ;
}

function checkHash() {
    $hash = md5('KnGNw5;NmH]\'Fvd');
    if ($_GET["hash"] != $hash && $_SESSION['hash']!=$hash)  {
        header("HTTP/1.0 404 Not Found - Archive Empty");
        require ('../404backend.php');
        exit;
    } elseif ($_GET["hash"] == $hash ) {
        $_SESSION['hash'] = $hash;
    }
}
?>
