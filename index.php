<?php
/*
 * Fils de ta grosse mémère !
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
$jnsmsleb = new JeNiqueSaMereSiLEstBonne();
$jnsmsleb->getTime(5);
$jnsmsleb->getAlert('Es-tu sûr qu\'elle soit si moche que ça ?');
$jnsmsleb->getTime(3);
$jnsmsleb->getAlert('je te crois sur parole...');
$jnsmsleb->getAlert('Et j\'en aurai fini, ceci a été codé très rapidement ;), on peut croire que je me la pete mais vraiment c\est à amélirer');

/*
time1();
time2();
*/

echo'Saaaallllllooooope!<br />' . PHP_EOL;
echo 'IL NE FAUT PAS PARLER COMME CA MEME SI TU AS UNE VIE DE MERDE, ET JE SAIS DE QUOI ON PARLE !<br />' . PHP_EOL;
echo 'Avec tous le respect que je te dois. <br />' . PHP_EOL;
echo 'Bon Courage, Charles.<br />' . PHP_EOL;

echo 'je sais pas si je me rappellerai du pourquoi de ce message, j\'ai vraiment une vie qui pue du cul (la plupart du temps ;) ) '. PHP_EOL;
