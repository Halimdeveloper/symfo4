<?php

namespace App\Controller;

use App\Entity\Property;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PropertyController extends AbstractController {

    /**
     * @Route("/biens", name="property.index" )
     * @return Response
     */
    public function index(): Response {
        // $property = new Property();
        // $property->setTitle('Mon premier bien')
        //     ->setPrice(200000)
        //     ->setRooms(4)
        //     ->setBedrooms(3)
        //     ->setDescription('Une petite descriptions.')
        //     ->setSurface(60)
        //     ->setFloor(4)
        //     ->setHeat(1)
        //     ->setCity('Montpellier')
        //     ->setAddress('8 rue du ballon')
        //     ->setPostalCode(34000);

        // $em = $this->getDoctrine()->getManager();
        // $em->persist($property);
        // $em->flush();

        $repository = $this->getDoctrine()->getRepository(Property::class);
        dump($repository);

        return $this->render( 'property/index.html.twig', [ 'current-menu' => 'properties' ] );
    }

}