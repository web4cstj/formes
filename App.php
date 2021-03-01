<?php
class App {
    /**
     * Méthode html_nbCotes retourne le select permettant de choisir la forme
     * ATTENTION Créer et faire afficher un tableau (array) contenant la liste des valeurs possibles.
     * @param string $courant La valeur de l'option devant être "selected". Défaut ""
     * @return string
     */
    
     
    /**
     * Méthode html_couleur retourne le champ permettant de choisir une couleur
     * @param string $couleur La couleur à mettre dans le value du champ
     * @return string
     */
    
     
    /**
     * Méthode html_svg retourne la zone d'affichage du résultat final
     * @param integer $nbCotes Le nombre de cotés du polygone à générer
     * @param string $couleur La couleur de la forme
     * @return string
     */
    
     
    /**
     * Méthode couleurAlea retourne une couleur aléatoire au format hexadécimal (#FFFFFF)
     * @return string
     */
    
     
    /**
     * Méthode pointsPolygone retourne la série de points pour créer un polygone régulier sous forme de chaine de caractères
     * ATTENTION Cette méthode est complète.
     * @param integer $n Le nombre de côtés du polygone
     * @param integer $r Le rayon du polygone. Défaut 250
     * @return string
     */
    static function pointsPolygone($n, $r = 250) {
        $resultat = [];
        for ($i = 0; $i < $n; $i += 1) {
            $a = $i * 2 * pi() / $n;
            $resultat[] = $r * cos($a) . "," . $r * sin($a);
        }
        $resultat = implode(" ", $resultat);
        return $resultat;
    }
}