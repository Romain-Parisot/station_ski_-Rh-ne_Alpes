<?php

namespace App\Controller\Admin;

use App\Entity\Piste;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CodeEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TimeField;

class PisteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Piste::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            AssociationField::new('station'),
            TextField::new('name'),
            ChoiceField::new('level')
                ->setChoices([
                    'Verte' => 'verte',
                    'Bleue' => 'bleue',
                    'Rouge' => 'rouge',
                    'Noire' => 'noire'
                ])
                ->allowMultipleChoices(false),
            ArrayField::new('schedule'),
            BooleanField::new('isAlpin'),
            BooleanField::new('isClose'),
            TextEditorField::new('message'),
        ];
    }
}
