<?php
namespace PortPontrieuxBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class TarifsController extends Controller
{
    public function indexAction()
    {
        $manager = $this->getDoctrine()->getManager();
                        $rep = $manager->getRepository('PortPontrieuxBundle:Emplacement');
                        $lesEmplacements = $rep->findAll();
                    	//$lesEmplacements = $rep->mesEmplacementsDQL($manager);
                        //$lesEmplacements = $rep->mesEmplacementsQueryBuilder();
                        return $this->render('PortPontrieuxBundle:Tarifs:index.html.twig', Array('lesEmplacements' => $lesEmplacements));
    }
}