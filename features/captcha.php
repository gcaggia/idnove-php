<?php

/**
 * Generate a random text with md5 method for captcha
 * @param integer $pLength specify length of the random text
 * @return string $text which is the random text
 * @author Guillaume Caggia
 * @version 1.0
 * @todo Method 1 for captcha function
 */
function captchaMd5($pLength)
{
    $text = uniqid();

    $text = md5($text);

    $text = substr($text, 0, $pLength);

    return $text;
}

/**
 * Generate a random text with arrayRand method for captcha
 * @param integer $pLength specify length of the random text
 * @return string $text which is the random text
 * @author Guillaume Caggia
 * @version 1.0
 * @todo Method 2 for captcha function
 */
function captchaArrayRand($pLength)
{
    $arrayWords = array (
                          md5(uniqid()),
                          md5(uniqid()),
                          md5(uniqid()),
                          md5(uniqid()),
                          md5(uniqid()),
                          md5(uniqid())
                        );

    $arrayShuffle = array_rand($arrayWords, 1);

    $text = substr($arrayWords[$arrayShuffle], 0, $pLength);

    return $text;
}

/**
 * Generate a random text with arrayRand method and dico_utf8.txt for captcha
 * @param integer $pLength specify length of the random text
 * @return string $text which is the random text
 * @author Guillaume Caggia
 * @version 1.0
 * @todo Method 3 for captcha function
 */
function captchaArrayRandDico($pLength)
{
    $arrayWords = file($_SERVER['DOCUMENT_ROOT'] . 'idnove/features/dico_utf8.txt');

    $arrayShuffle = array_rand($arrayWords, 1);

    $text = substr($arrayWords[$arrayShuffle], 0, $pLength);

    return $text;
}

/**
 * Generate a random text with sha1 method for captcha
 * @param integer $pLength specify length of the random text
 * @return string $text which is the random text
 * @author Guillaume Caggia
 * @version 1.0
 * @todo Method 4 for captcha function
 */
function captchaSha1($pLength)
{
    $text = uniqid();

    $text = sha1($text);

    $text = substr($text, 0, $pLength);

    return $text;
}

/**
 * Generate a random text with time method for captcha
 * @param integer $pLength specify length of the random text
 * @return string $text which is the random text
 * @author Guillaume Caggia
 * @version 1.0
 * @todo Method 5 for captcha function
 */
function captchaTime($pLength)
{
    $text = time();

    $text = strrev($text);

    $text = substr($text, 0, $pLength);

    return $text;
}

/**
 * Generate a random text with mt_rand method for captcha
 * @param integer $pLength specify length of the random text
 * @return string $text which is the random text
 * @author Guillaume Caggia
 * @version 1.0
 * @todo Method 6 for captcha function
 */
function captchaMtRand($pLength)
{
    $arrayLowercase = array('a', 'b', 'c', 'd', 'e', 'f',
                            'g', 'h', 'i', 'j', 'k', 'l',
                            'm', 'n', 'o', 'p', 'q', 'r',
                            's', 't', 'u', 'v', 'w', 'x', 'y', 'z');

    $arrayUppercase = array('A', 'B', 'C', 'D', 'E', 'F',
                            'G', 'H', 'I', 'J', 'K', 'L',
                            'M', 'N', 'O', 'P', 'Q', 'R',
                            'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

    $arrayDigit = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);

    $arrayMerge = array_merge($arrayLowercase, $arrayUppercase, $arrayDigit);

    for ($i=$pLength, $text=""; $i>0; $i--) {
        $text .= $arrayMerge[mt_rand(0, count($arrayMerge)-1)];
    }

    return $text;
}

/**
 * Generate a random text with mt_rand method and pronounceable words for captcha
 * @param integer $pLength specify length of the random text
 * @return string $text which is the random text
 * @author Guillaume Caggia
 * @version 1.0
 * @todo Method 7 for captcha function
 */
function captchaMtRandWord($pLength)
{

    $arrayLowerConsonant = array('b', 'c', 'd', 'f', 'g', 'h',
                            'j', 'k', 'l', 'm', 'n', 'p',
                            'q', 'r', 's', 't', 'v', 'w', 'x', 'z');

    $arrayUpperConsonant = array('B', 'C', 'D', 'F', 'G', 'H',
                            'J', 'K', 'L', 'M', 'N', 'P',
                            'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Z');

    $arrayLowerVowel     = array('a', 'e', 'i', 'o', 'u', 'y');

    $arrayUpperVowel     = array('A', 'E', 'I', 'O', 'U', 'Y');


    $arrayConsonant = array_merge($arrayLowerConsonant, $arrayUpperConsonant);

    $arrayVowel = array_merge($arrayLowerVowel, $arrayUpperVowel);

    $flag = (mt_rand(0, 1) ? true : false);

    for ($i=$pLength, $text=""; $i>0; $i--) {
        if ($flag) {
            $text .= $arrayConsonant[mt_rand(0, count($arrayConsonant)-1)];
            $flag = !$flag;
        } else {
            $text .= $arrayVowel[mt_rand(0, count($arrayVowel)-1)];
            $flag = !$flag;
        }
    }

    return $text;
}

/**
 * Generate a random text with microtime method for captcha
 * @param integer $pLength specify length of the random text
 * @return string $text which is the random text
 * @author Guillaume Caggia
 * @version 1.0
 * @todo Method 8 for captcha function
 */
function captchaMicrotime($pLength)
{
    $mtime = microtime(true);

    $mtime = next(explode(".", $mtime));

    $text = str_pad($mtime, $pLength, "0", STR_PAD_RIGHT);

    return $text;
}

/**
 * Generate a random text with mt_rand and Pow methods for captcha
 * @param integer $pLength specify length of the random text
 * @return string $text which is the random text
 * @author Guillaume Caggia
 * @version 1.0
 * @todo Method 9 for captcha function
 */
function captchaMtRandPow($pLength)
{
    $text = mt_rand(0, pow(10, 5));

    $text = str_pad($text, $pLength, "0", STR_PAD_RIGHT);

    return $text;
}

/**
 * Generate a random addition for the captcha
 * @param integer $pLength specify length of the random text
 * @return string $text which is the random text
 * @author Guillaume Caggia
 * @version 1.0
 * @todo Method 10 for captcha function
 */
function captchaAddQuestionDigit($pLength)
{
    return mt_rand(0, 99) . "+" . mt_rand(0, 99);
}

/**
 * Generate a random addition for the captcha
 * @param integer $pLength specify length of the random text
 * @return string $text which is the random text
 * @author Guillaume Caggia
 * @version 1.0
 * @todo Method 11 for captcha function
 */
function captchaAddQuestionText($pLength)
{
    $digitArray = array('un', 'deux', 'trois', 'quatre', 'cinq', 'six', 'sept', 'huit', 'neuf');

    return $digitArray[mt_rand(0, 8)] . "+" . $digitArray[mt_rand(0, 8)];
}

/**
 * Generate a random image for the captcha
 * @param integer $pLength specify length of the random text
 * @author Guillaume Caggia
 * @version 1.0
 * @todo Method 12 for captcha function
 */
function captchaImageSimple($pLength)
{
    $text = captchaMtRandWord($pLength);

    $width = 10 * $pLength + 10;
    $height = 20;
    
    //Create an object image with GD library
    $img = imagecreate($width, $height);

    $background = imagecolorallocate($img, 255, 255, 255);

    $colorText = imagecolorallocate($img, 0, 0, 0);

    $colorLine = imagecolorallocate($img, 100, 100, 100);

    //Transform text into an image. Use $img variable to store it
    imagestring($img, 5, 10, 0, $text, $colorText);
    
    for ($dy=6, $i=$dy; $i < $height*0.85; $i+=$dy) {
        imageline($img, 0, $i, $width, $i, $colorLine);
    }


    //Convert $img object to png
    imagepng($img);

    //Free memory about $img variable
    imagedestroy($img);

}


/**
 * Generate a random image for the captcha
 * @param integer $pLength specify length of the random text
 * @author Guillaume Caggia
 * @version 1.0
 * @todo Method 12 for captcha function
 */
function captchaImageComplex($pLength)
{
    $text = captchaMtRandWord($pLength);

    $width = 12 * $pLength + 20;
    $height = 32;

    $fontfile = $_SERVER['DOCUMENT_ROOT'] . 'idnove/features/smartie.ttf';
    
    //Create an object image with GD library
    $img = imagecreate($width, $height);

    $background = imagecolorallocate($img, 255, 255, 255);

    $colorText = imagecolorallocate($img, 24, 60, 91);

    $colorLine = imagecolorallocate($img, 100, 100, 100);

    //Transform text into an image. Use $img variable to store it
    imagettftext($img, 24, -5, 5, $height/2+8, $colorText, $fontfile, $text);
    
    for ($dy=6, $i=$dy; $i < $height*0.85; $i+=$dy) {
        imageline($img, 0, $i, $width, $i, $colorLine);
    }

    $convolutionMatrix = array(array(2, 0, 0), array(0, -1, 0), array(0, 0, -1));
    imageconvolution($img, $convolutionMatrix, 1, 200);

    //Convert $img object to png
    imagepng($img);

    //Free memory about $img variable
    imagedestroy($img);

}

header("Content-type: image/png");
captchaImageComplex(5);
