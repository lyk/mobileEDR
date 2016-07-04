<?php

namespace EDR\AppliBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * TagRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TagRepository extends EntityRepository
{

    public function getTag($id_etab){

        // On récupère la liste des candidatures de cette annonce
        $listApplications = $em
            ->getRepository('EDRAppliBundle:Tag')
            ->findBy(array('tag' => $tags))
        ;

        return $this->render('OCPlatformBundle:Etablissement:index.html.twig', array(
            'tag' => $tags
        ));
    }

}
