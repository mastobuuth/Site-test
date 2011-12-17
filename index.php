<?php
/*
 * Fils de ta grosse mÃ©mÃ¨re !
 */
 /*
function time1 ()
{
    sleep(5);
}
function time2 ()
{
    sleep(3);
}
*/
echo $_SERVER['PHP_SELF'];
//if ($_GET['lang'] > ' ') {
//    echo $_get['lang'];
//}
if (isset($_GET['lang'])) {
    if ($_GET['lang'] == 'jp') {
        $lang = 'jp';
        $masto = 'トーマス';
    } else if ($_GET['lang'] == 'fr') {
        $lang = 'fr';
        $masto = 'MASTO';
    } else {
        $lang = '';
    }
    define('MASTO', $masto);
    define('MYLANG', $lang);
}
if (isset($_GET['page']) && $_GET['page'] > ' ') {
    $page = '&page=' . htmlentities($_GET['page']);
} else {
    $page = '';
}
Class JeNiqueSaMereSiLEstBonne
{
    private $trou1;
    private $trou2;
    private $siElleEstBonne;
    
    public function __construct($trou1 = 0, $trou2 = 0, $siElleEstBonne = FALSE)
    {
        $this->trou1 = $trou1;
        $this->trou2 = $trou2;
        $this->siElleEstBonne = $siElleEstBonne;
    }
    
    public function getTime($nb)
    {
        sleep($nb);
        return TRUE;
    }
    public function getAlert($msg)
    {
        $alert  = '<script type="text/javascript>' . PHP_EOL;
        $alert .= 'alert("' . $msg . '")' . PHP_EOL;
        $alert .= '</script>' . PHP_EOL;
    }
}
echo '<!DOCTYPE html>' . PHP_EOL;
echo '<html>' . PHP_EOL;
echo '<head>' . PHP_EOL;
    echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />' . PHP_EOL;
    echo '<title>' . $masto . ' | SITE 1</title>' . PHP_EOL;
    
    echo '<style type="text/css">' . PHP_EOL;
    ?>
        body {
            margin: 0;
            font-family: Helvetica;
            font-size: 12px;
        }
        .clearfix {
            clear: both;
            margin: 0;
            padding: 0;
            height: 0px;
        }
        #header {
            margin: 0 auto;
            background-image: url(img/backgroundTile.png);
            background-repeat: repeat;
            background-color: #333333;
            border-bottom: 4px solid #333333;
        }
        #header_content {
            margin: 0 auto;
            width: 1000px;
        }
        #div_logo {
            float: right;
        }
        #div_nom {
            /*text-align: center;*/
        }
        #div_nom h1{
            margin: 0;
            padding: 40px 10px 0px 10px;
            font-size: 80px;
            color: #FFFFFF;
        }
        #p_site_slogan {
            margin: 0px 0px 20px 0px;
            padding: 0px 10px 10px 10px;
            font-size: 20px;
            color: #FFFFFF;
        }
        #ul_nav {
            
            margin: 0px;/* 0px 0px 100px*/
            padding: 0;
            list-style-type: none;
        
        }
        .li_nav {
            float: left;
            margin: 0px 10px;
            line-height: 50px;
            text-align: center;
            border: 1px solid #333333;
            border-radius: 5px;
            background-color: #FFFFFF;
            opacity: 0.7;
            height: 50px;
            width: 50px;
        }
        #main {
            width: 980px;
            padding: 10px;
            margin: auto;
            background-color: #EFEFEF;
        }
    <?php
    echo '</style>' . PHP_EOL;
    
    echo '<script type="text/javascript">' . PHP_EOL;
    ?>
        function changeColorOver(elem) {
            document.getElementById(''+elem+'').style.backgroundColor = '#7799E3';
        }
        function changeColorOut(elem) {
            document.getElementById(''+elem+'').style.backgroundColor = '#FFFFFF';
        }
    <?php
    echo '</script>' . PHP_EOL;
echo '</head>' . PHP_EOL;

echo '<body>' . PHP_EOL;
    
    echo '<div id="header">' . PHP_EOL;
        echo '<div id="div_lang">' . PHP_EOL;
            echo '<a href="index.php?lang=fr' . $page . '"><img src="img/fr.png" alt="langue fr" /></a>' . PHP_EOL;
            echo ' - ' . PHP_EOL;
            echo '<a href="index.php?lang=jp' . $page . '"><img src="img/jp.png" alt="langue jp" /></a>' . PHP_EOL;
        echo '</div>' . PHP_EOL;
        echo '<div id="header_content">' . PHP_EOL;
        echo '<div id="div_logo">' . PHP_EOL;
            echo '<img src="img/xcode.png" alt="logo" />' . PHP_EOL;
        echo '</div>' . PHP_EOL;
        echo '<div id="div_nom">' . PHP_EOL;
            echo '<h1>SITE 1</h1>' . PHP_EOL;
            echo '<p id="p_site_slogan">' . MASTO . '&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;DEV-LYON  2&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;IP-FORMATION</p>' . PHP_EOL;
            include 'includes/navigation.php';
        echo '</div>' . PHP_EOL;
        
        echo '<div class="clearfix"></div>' . PHP_EOL;
        echo '</div>' . PHP_EOL;
    echo '</div>' . PHP_EOL;
    echo '<div id="main">' . PHP_EOL;
        if (isset($_GET['page']) && $_GET['page'] > ' ') {
            include 'includes/' . $_GET['page'] . '.php';
        } else {
            include 'includes/index.inc.php';
        }
    echo '</div>' . PHP_EOL;
    
echo '</body>' . PHP_EOL;
echo '</html>' . PHP_EOL;
