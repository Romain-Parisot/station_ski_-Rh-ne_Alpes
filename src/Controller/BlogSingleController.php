<?php

namespace App\Controller;

use App\Repository\BlogRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogSingleController extends AbstractController
{
    #[Route('/blog/{id}', name: 'app_blog_show')]
    public function show($id , BlogRepository $blogRepository)
    {
        $blog = $blogRepository->find($id);

        if (!$blog) {
            throw $this->createNotFoundException('L\'événement n\'existe pas.');
        }

        return $this->render('blog/show.html.twig', [
            'blog' => $blog,
        ]);
    }
}
