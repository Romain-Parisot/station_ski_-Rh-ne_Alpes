<?php

namespace App\Controller\Admin;

use App\Entity\RemonteMeca;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class RemonteMecaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return RemonteMeca::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
