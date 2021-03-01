<?php
class App {
    /**
     * Méthode html_nbCotes retourne le select permettant de choisir la forme
     * ATTENTION Créer et faire afficher un tableau (array) contenant la liste des valeurs possibles.
     * @param string $courant La valeur de l'option devant être "selected". Défaut ""
     * @return string
     */
    static function html_nbCotes($courant="") {
        $choix = [
            0 => 'Aléatoire',
            3 => 'Triangle',
            4 => 'Carré',
            5 => 'Pentagone',
            6 => 'Hexagone',
            7 => 'Heptagone',
            8 => 'Octogone',
        ];
        $resultat = '';
        $resultat .= '<select name="nbCotes" id="nbCotes">';
        foreach($choix as $value=>$label) {
            if ($courant == $value) {
                $resultat .= '<option value="'.$value.'" selected="selected">'.$label.'</option>';
            } else {
                $resultat .= '<option value="'.$value.'">'.$label.'</option>';
            }
        }
        $resultat .= '</select>';
        return $resultat;
    }
    /**
     * Méthode html_couleur retourne le champ permettant de choisir une couleur
     * @param string $couleur La couleur à mettre dans le value du champ
     * @return string
     */
    static public function html_couleur($couleur) {
        $resultat = '';
        $resultat .= '<input type="color" name="couleur" value="'.$couleur.'"/>';
        $resultat .= '<input type="checkbox" id="alea" onchange="this.previousSibling.disabled = this.checked"/> ';
        $resultat .= '<label for="alea">Aléatoire</label>';
        return $resultat;
    }
    /**
     * Méthode html_svg retourne la zone d'affichage du résultat final
     * @param integer $nbCotes Le nombre de cotés du polygone à générer
     * @param string $couleur La couleur de la forme
     * @return string
     */
    static public function html_svg($nbCotes, $couleur) {
        $resultat = '';
        $resultat .= '<svg width="500" height="500" viewBox="-250 -250 500 500">';
        $resultat .= '<polygon fill="'.$couleur.'" points="'.self::pointsPolygone($nbCotes).'" transform="rotate(-90)"/>';
        $resultat .= '</svg>';
        return $resultat;
    }
    /**
     * Méthode couleurAlea retourne une couleur aléatoire au format hexadécimal (#FFFFFF)
     * @return string
     */
    static function couleurAlea() {
        $resultat = '';
        $chiffres = '0123456789ABCDEF';
        for ($i = 0; $i < 6; $i += 1) {
            $resultat .= $chiffres[rand(0,15)];
        }
        return "#".$resultat;
    }
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