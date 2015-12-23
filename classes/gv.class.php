<?php
class gv
{
    /**
     * Gelen Veri Kontrolü
     * @param string  $tur      s | i | email
     */
    static function post($anahtar,$tur='s') {
        return self::gelenVeri($anahtar,$tur,'post');
    }
    /**
     * Gelen Veri Kontrolü
     *
     * @param string  $tur      s | i | email
     */
    static function get($anahtar,$tur='s')
    {
        return self::gelenVeri($anahtar,$tur,'get');
    }

    /**
     * Gelen Veri Kontrolü
     * @param string  $tur      s | i | email
     * @param string  $metod    post | get
     */
    static function gelenVeri($anahtar,$tur='s',$metod='post')
    {
        $return = null;
        $gelenveri = null;
        if( isset($_POST[$anahtar]) || isset($_GET[$anahtar]) ){
            $gelenveri = $metod=='post' ? $_POST[$anahtar] : $_GET[$anahtar];
        }
        switch ($tur) {
            case 'safe': //String
                if(!is_array($gelenveri)){
                    $return = htmlspecialchars( strip_tags( trim($gelenveri) ));
                }
            break;
            case 's': //String
                if(!is_array($gelenveri)){
                    $return =  strip_tags( trim($gelenveri) );
                }
            break;
            case 'i':
                if(!is_array($gelenveri)){
                    $return = intval( trim($gelenveri) );
                }
            break;
            case 'f':
                if(!is_array($gelenveri)){
                    $return = floatval( trim($gelenveri) );
                }
            break;
            case 'email':
                if(!is_array($gelenveri)){
                    $return = htmlspecialchars(strip_tags( trim($gelenveri) ));
                    $return = validate::is_email($return) ? $return : null;
                }
            break;
        }
    	return $return;
    }
}//class str
