<?php

namespace App\Controller;

use App\Entity\Fans;
use App\Form\FanType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/fans", name="fans_")
 */
class FansController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index() {
        return $this->render('fans/index.html.twig', [
            'controller_name' => 'FansController',
        ]);
    }

    /**
     * @Route("/create", name="create")
     */
    public function create(Request $request) {

        $title = "Novo Torcedor";

        $fan = new Fans();

        $form = $this->createForm(FanType::class, $fan);
        $form->handleRequest($request);

        if ($form->isSubmitted())  {
            $fan = $form->getData();

            $menager = $this->getDoctrine()->getManager();
            $menager->persist($fan);
            $menager->flush();

            $this->addFlash('success', 'Torcedor adicionado com Sucesso!');
        }

        return $this->render('fans/form.html.twig', [
            'title' => $title,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/save", name="save")
     */

    public function save(Request $request) {

        var_dump($request->request->all());
    }
}
