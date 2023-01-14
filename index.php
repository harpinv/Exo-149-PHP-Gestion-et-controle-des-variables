<?php

// En utilisant toutes les fonctions que nous venons de voir.

/**
 * 1. Vérifiez si cette variable est vide, si c'est le cas, affichez vide si non affichez pas vide.
 */
$var = 0;
// TODO votre code ici.

if (empty($var)) {
    echo "vide";
} else {
    echo "pas vide";
}
echo "<br>";

/**
 * 2. Détruisez la variable déclarée, tentez de l'afficher ensuite en utilisant un print_r.
 */
$eraseMe = "Please erase me !";
// TODO votre code ici.

unset($eraseMe);
print_r($eraseMe);
echo "<br>";

/**
 * 3. Déclarez vous même un tableau et utilisez var_dump pour afficher toutes les informations de debug.
 */
// TODO votre code ici.

$table = ["ranger", "manger", "boire", "dormir", "travailler", "apprendre"];
var_dump($table);
echo "<br>";

/**
 * 4. Faites la même chose avec le même tableau, mais pour la méthode print_r.
 */
// TODO votre code ici.
print_r($table);
echo "<br>";

/**
 * 5. A l'aide de la méthode isset, testez si la clé du tableau associatif 'doNotExists' existe ( SANS TOUCHER AU TABLEAU )
 *    Si c'est le cas, affichez le message 'Existe', si ce n'est pas le cas, affichez le message 'Existe pas'.
 */
$tab = ["test" => true, "name" => "Doe", "age" => 32];

// TODO Votre code ici.
if(isset($tab)) {
    echo "Existe";
} else {
    echo "Existe pas";
}
echo "<br>";

/**
 * 6. Créez une variable contenant:
 *    - un booléen
 *    - un nombre entier
 *    - un nombre flottant ( à virgule )
 *    - une chaîne de caractère.
 *
 * Créez une fonction qui prend en paramètre une simple variable, cette fonction doit tester le type du contenu de la variable
 * et afficher le texte "La variable passé en paramètre est de type: TYPE".
 *
 * exemple: funct maFunct(monparam){
 *              si monparam EST boolean {
 *                  afficher -> Ma variable est de type: boolean
 *              }
 *              SI monparam EST ENTIER...
 *              SI...
 *              SI...
 *          }
 * Passez toutes les variables créées précédemment dans cette fonction.
 */

// TODO votre code ici.

$vrai = true;
$nombre = 27;
$float = 6.7;
$text = "Mes chaussure verte";

function monType($variable) {
    if(is_bool($variable)) {
        echo "La variable passé en paramètre est de type: booléen";
    } elseif (is_int($variable)) {
        echo "La variable passé en paramètre est de type: nombre entier";
    } elseif (is_float($variable)) {
        echo "La variable passé en paramètre est de type: nombre décimal";
    } elseif (is_string($variable)) {
        echo "La variable passé en paramètre est de type: chaîne de caractère";
    } elseif (is_array($variable)) {
        echo "La variable passé en paramètre est de type: tableau";
    } else {
        echo "La variable passé en paramètre est de type: null";
    }
}

monType($vrai);
echo "<br>";
monType($nombre);
echo "<br>";
monType($float);
echo "<br>";
monType($text);