<?php
// src/Controller/EquipementsControleur.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
require_once 'modele/class.PdoJeux.inc.php';
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\RedirectController;
use PdoJeux;

class EquipementsController extends AbstractController{
       /**
     * fonction pour afficher la liste des genres
     * @param $db
     * @param $idEquipementsModif  positionné si demande de modification
     * @param $idEquipementseNotif  positionné si mise à jour dans la vue
     * @param $notification  pour notifier la mise à jour dans la vue
     */
    private function afficherEquipement(PdoJeux $db, string $idEquipementsModif, string $idEquipementsNotif, string $notification ) {
        $tbEquipements  = $db->getLesEquipements();
        $tbPlateformes = $db->getLesPlateformes();
        $tbMarques = $db->getLesMarques();
        $tbPegis = $db->getLesPegi2();
        $tbGenres = $db->getLesGenres();
        return $this->render('lesEquipements.html.twig', array(
            'menuActif' => 'Jeux',
            'idEquipementsModif' => $idEquipementsModif,
            'idEquipementsNotif' => $idEquipementsNotif,
            'notification' => $notification,
            'tbEquipements' => $tbEquipements
        ));
    }

    /**
    * @Route("/equipements", name="equipements_afficher")
    */
    public function index(SessionInterface $session)
    {
        if ($session->has('idUtilisateur')) {
            $db = PdoJeux::getPdoJeux();
            return $this->afficherEquipement($db, -1, -1, 'rien');
        } else {
            return $this->render('connexion.html.twig');
        }
    }

     /**
     * @Route("/equipements/ajouter", name="equipements_ajouter")
     */
    public function ajouterEquipements(SessionInterface $session, Request $request)
    {
        $db = PdoJeux::getPdoJeux();
        if (!empty($request->request->get('txtRefJeu'))) {
            $idEquipementsNotif = $db->ajouterEquipements($request->request->get('txtRefJeu'), $request->request->get('txtNomJeu'), $request->request->get('dateParutionJeu'), strval($request->request->get('txtPrixJeu')), intval($request->request->get('strIdGenre')), intval($request->request->get('strIdPlateforme')), intval($request->request->get('strIdMarque')), intval($request->request->get('strIdPegi')));
            $notification = 'Ajouté';
        }
        return $this->afficherEquipement($db, -1,  $idEquipementsNotif, $notification);
    }


      /**
     * @Route("/equipements/demandermodifier", name="equipements_demandermodifier")
     */
    public function modifierEquipements(SessionInterface $session, Request $request)
    {
        $db = PdoJeux::getPdoJeux();
        return $this->afficherEquipement($db, $request->request->get('txtRefJeu'),  -1, 'modif');
    }


    /**
     * @Route("/equipements/validermodifier", name="equipements_validermodifier")
     */
    public function validerModifier(SessionInterface $session, Request $request)
    {
        $db = PdoJeux::getPdoJeux();
        $db->modifierEquipements($request->request->get('txtRefJeu'), $request->request->get('txtNomJeu'), $request->request->get('dateParutionJeu'), strval($request->request->get('txtPrixJeu')), intval($request->request->get('strIdGenre')), intval($request->request->get('strIdPlateforme')), intval($request->request->get('strIdMarque')), intval($request->request->get('strIdPegi')));
        return $this->afficherEquipement($db, -1,  $request->request->get('txtRefJeu'), 'Modifié');
    }


     /**
     * @Route("/equipements/supprimerJeu", name="equipements_supprimer")
     */
    public function supprimerEquipements(SessionInterface $session, Request $request)
    {
        $db = PdoJeux::getPdoJeux();
        $db->supprimerEquipement($request->request->get('txtRefJeu'));
        $this->addFlash(
            'success', "L'equipement a été supprimé"
        );

        return $this->afficherEquipement($db, -1,   -1, "rien");
    }
}