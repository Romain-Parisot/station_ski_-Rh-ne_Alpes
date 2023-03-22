<?php

namespace App\Controller\Admin;

use App\Entity\SuperAdmin;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class SuperAdminCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SuperAdmin::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('username'),
            ChoiceField::new('roles')->allowMultipleChoices(),
            TextField::new('password')->hideOnIndex(),
        ];
    }

}
