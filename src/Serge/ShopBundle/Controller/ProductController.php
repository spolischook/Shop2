<?php

namespace Serge\ShopBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\ArrayAdapter;
use Serge\ShopBundle\Entity\Product;
use Serge\ShopBundle\Form\ProductType;

/**
 * Product controller.
 *
 */
class ProductController extends Controller
{
    /**
     * Lists all Product entities.
     *
     */
    public function indexAction($page)
    {
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT p FROM ShopBundle:Product p";
        $query = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $page,
            10
        );

        return $this->render('ShopBundle:Product:index.html.twig', array(
            'pagination' => $pagination,
        ));
    }

    /**
     * Finds and displays a Product entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $product = $em->getRepository('ShopBundle:Product')->find($id);

        if (!$product) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ShopBundle:Product:show.html.twig', array(
            'entity'      => $product,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Product entity.
     *
     */
    public function newAction()
    {
        $product = new Product();
        $form = $this->createForm(new ProductType(), $product);

        return $this->render('ShopBundle:Product:new.html.twig', array(
            'entity' => $product,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Product entity.
     *
     */
    public function createAction(Request $request)
    {
        $product  = new Product();
        $form = $this->createForm(new ProductType(), $product);
        $form->bind($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);

            $em->flush();

            return $this->redirect($this->generateUrl('product_show', array('id' => $product->getId())));
        }

        return $this->render('ShopBundle:Product:new.html.twig', array(
            'entity' => $product,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Product entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $product = $em->getRepository('ShopBundle:Product')->find($id);

        if (!$product) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $editForm = $this->createForm(new ProductType(), $product);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ShopBundle:Product:edit.html.twig', array(
            'entity'      => $product,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Product entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $product = $em->getRepository('ShopBundle:Product')->find($id);

        if (!$product) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ProductType(), $product);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($product);
            $em->flush();

            $this->get('session')->setFlash('notice', 'Your changes were saved!');
            return $this->redirect($this->generateUrl('product_edit', array('id' => $id)));
        }

        return $this->render('ShopBundle:Product:edit.html.twig', array(
            'entity'      => $product,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Product entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $product = $em->getRepository('ShopBundle:Product')->find($id);

            if (!$product) {
                throw $this->createNotFoundException('Unable to find Product entity.');
            }

            $em->remove($product);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('product'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
