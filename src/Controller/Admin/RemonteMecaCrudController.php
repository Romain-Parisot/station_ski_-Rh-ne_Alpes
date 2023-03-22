<?php

namespace App\Controller\Admin;

use App\Entity\RemonteMeca;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class RemonteMecaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return RemonteMeca::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            AssociationField::new('station'),
            //CodeEditorField::new('schedule'),
            ChoiceField::new('type')
                ->setChoices([
                    'Téléski' => 'téléski',
                    'Télésiège' => 'télésiège',
                    'Télécabine' => 'télécabine',
                    'Tapis-roulant' => 'tapis-roulant',
                    'Funiculaire' => 'funiculaire',
                ])
                ->allowMultipleChoices(false),
            BooleanField::new('isClose'),
            TextEditorField::new('message'),
        ];
    }
}
