<?php
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends Controller
{
	/**
     * @Route("/blogpage", name="blogpage")
     */
    public function indexAction()
    {
        return $this->render('blogpage/blogpage.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}