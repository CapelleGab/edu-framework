<?php
/*
 * Ce fichier fait partie du Studoo
 *
 * @author Benoit Foujols
 *
 * Pour les informations complètes sur les droits d'auteur et la licence,
 * veuillez consulter le fichier LICENSE qui a été distribué avec ce code source.
 */

namespace Studoo\EduFramework\Core\View;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class TwigCore
{
    private static Environment $twig;

    /**
     * @param string $path Chemin vers le dossier templates
     */
    public function __construct(string $path)
    {
        // Gestion du moteur de template
        $loader = new FilesystemLoader($path);
        // création de l'objet $twig
        self::$twig = new Environment($loader, []);
    }

    /**
     * Retourne l'objet de l'environnement Twig pour construire les pages HTML ou JSON ...
     * @return Environment
     */
    public static function getEnvironment(): Environment
    {
        return self::$twig;
    }
}
