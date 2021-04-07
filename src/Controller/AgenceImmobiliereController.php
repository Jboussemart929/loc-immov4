<?php

namespace App\Controller;

use App\Form\BienImmoType;
use App\Entity\BiensRecherche;
use App\Entity\BiensImmobilier;
use App\Form\BiensRechercheType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\BiensImmobilierRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class AgenceImmobiliereController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('agence_immobiliere/index.html.twig', [
            'controller_name' => 'AgenceImmobiliereController',
        ]);
    }

    /**
     * @Route("/biens_immobiliers", name="biens_immobiliers")
     */

    public function biens_immobiliers(Request $request, EntityManagerInterface $manager, Security $security){
       
        $repo = $this->getDoctrine()->getRepository(BiensImmobilier::class);
        $biens_immo = $repo->findAll();

        $biens = new BiensImmobilier();
        $form_biens = $this->createForm(BienImmoType::class, $biens);
        $form_biens->handleRequest($request);

        if($form_biens->isSubmitted() && $form_biens->isValid()){
            
            $user = $security->getUser();
            $biens->setAuthor($user);

            // upload de l'image
            $image_file = $form_biens->get('images')->getData();
            $original_image_name = pathinfo($image_file->getClientOriginalName(), PATHINFO_FILENAME);
            
                    // this is needed to safely include the file name as part of the URL
                    $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $original_image_name);
                    $newFilename = $safeFilename.'-'.uniqid().'.'.$image_file->guessExtension();
                    $image_file->move(
                        $this->getParameter('images_directory'),
                        $newFilename);
                        $biens->setImages($newFilename);


            $now = new \DateTime();
            $biens->setDateDeCreation($now);

            $manager->persist($biens);
            $manager->flush();
            return $this->redirectToRoute('biens_immobiliers');
        }

        return $this->render('agence_immobiliere/biens_immobiliers.html.twig', ["biens_immo" => $biens_immo, "form_biens" => $form_biens->createView()]);
    }

    /**
     * @Route("/biens_immobiliers/{id<[0-9]+>}", name="biens_immobiliers_suppression", methods="DELETE")
     */
    public function suppression(BiensImmobilier $biens, Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('SUP'.$biens->getId(), $request->request->get('_token'))) {
            $entityManager->remove($biens);
            $entityManager->flush();
            $this->addFlash('success', 'La suppression a été effectué');

        }
        
        return $this->redirectToRoute('biens_immobiliers');
    }

    /**
     * @Route("/biens_immobiliers/edit/{id}", name="biens_immobiliers_modification", methods="GET|POST")
     */
    public function modification(BiensImmobilier $biens, Request $request, EntityManagerInterface $entityManager, Security $security)
    {
        $form_biens = $this->createForm(BienImmoType::class, $biens);
        $form_biens->handleRequest($request);

        if($form_biens->isSubmitted() && $form_biens->isValid()){
                if($security->getUser() === $biens->getAuthor()){
    
                    // upload de l'image
                $image_file = $form_biens->get('images')->getData();
                $original_image_name = pathinfo($image_file->getClientOriginalName(), PATHINFO_FILENAME);
                
                        // this is needed to safely include the file name as part of the URL
                        $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $original_image_name);
                        $newFilename = $safeFilename.'-'.uniqid().'.'.$image_file->guessExtension();
                        $image_file->move(
                            $this->getParameter('images_directory'),
                            $newFilename);
                            $biens->setImages($newFilename);
    
    
                $now = new \DateTime();
                $biens->setDateDeCreation($now);
    
                $entityManager->flush();
                return $this->redirectToRoute('biens_immobiliers');
            }
            return $this->redirectToRoute('biens_immobiliers');
            
        }

        return $this->render('agence_immobiliere/modification.html.twig', ["biens" => $biens, "form_biens" => $form_biens->createView()]);
    }
    /**
     * @Route("/biens_immobiliers/{id}", name="biens_immobiliers_lire", methods="GET|POST")
     */
    public function bien(BiensImmobilierRepository $bienrepository, $id) {
        $bien = $bienrepository->find($id);
        return $this->render("agence_immobiliere/biens.html.twig", [ "bien" => $bien ] );
    }

    /**
     *
     * @Route("/biens_immobiliers/reservation/{id}", name="app_reservation", methods="GET|POST")
     */
    public function reservation(BiensImmobilier $biens, Request $request, EntityManagerInterface $entityManager, Security $security): Response
    {
        if ($this->isCsrfTokenValid('RESA'.$biens->getId(), $request->request->get('_token'))) {
            $user = $security->getUser();
            $biens->setReservateur($user);
            $entityManager->flush();
            $this->addFlash('success', 'La réservation a été effectué');
        }

        return $this->redirectToRoute("biens_immobiliers");
    }

    /**
     * @Route("/immo", name="filtreImmoByMax")
     *
     * @param mixed $valMax
     */
    public function filtreImmoByMax(BiensImmobilierRepository $repository, $valMax = null, Request $request): Response
    {
        $valMax = $request->get("valMax");
        // dd($valMax);
        $biens_immo = $repository->getImmoByMaxPrix($valMax);

        $biens = new BiensImmobilier();
        $form_biens = $this->createForm(BienImmoType::class, $biens);
        $form_biens->handleRequest($request);

        if($form_biens->isSubmitted() && $form_biens->isValid()){

                // upload de l'image
            $image_file = $form_biens->get('images')->getData();
            $original_image_name = pathinfo($image_file->getClientOriginalName(), PATHINFO_FILENAME);
            
                   
                    $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $original_image_name);
                    $newFilename = $safeFilename.'-'.uniqid().'.'.$image_file->guessExtension();
                    $image_file->move(
                        $this->getParameter('images_directory'),
                        $newFilename);
                        $biens->setImages($newFilename);


            $now = new \DateTime();
            $biens->setDateDeCreation($now);

            $manager->persist($biens);
            $manager->flush();
            return $this->redirectToRoute('biens_immobiliers');
        }

        return $this->render('agence_immobiliere/biens_immobiliers.html.twig', [
            "biens_immo" => $biens_immo,
            'isFiltre' => true,
            "form_biens" => $form_biens->createView()
        ]);
    }
}

