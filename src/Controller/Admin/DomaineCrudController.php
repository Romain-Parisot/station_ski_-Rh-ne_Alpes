<?php

namespace App\Controller\Admin;

use App\Entity\Domaine;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class DomaineCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Domaine::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name'),
            TextEditorField::new('description'),
            ImageField::new('logo')
                ->setUploadDir('public/uploads/domaine')
                ->setBasePath('uploads/domaine')
                ->setUploadedFileNamePattern('[slug]-[randomhash].[extension]'),
        ];
    }

}
