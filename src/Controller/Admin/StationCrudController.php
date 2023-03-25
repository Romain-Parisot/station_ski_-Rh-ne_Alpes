<?php

namespace App\Controller\Admin;

use App\Entity\Station;
use Doctrine\ORM\QueryBuilder;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FieldCollection;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FilterCollection;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\SearchDto;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\ChoiceFilter;

class StationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Station::class;
    }

    public function configureFilters(Filters $filters): Filters
    {
        $filters
            ->add('dashboard')
            ->add('admin', ChoiceFilter::new('admin')->setChoices([
                'Super Admin' => 'ROLE_SUPER_ADMIN',
                'Admin Mont-de-Lans' => 'ROLE_ADMIN_MON',
                'Admin Venosc' => 'ROLE_ADMIN_VEN',
                'Admin Tignes' => 'ROLE_ADMIN_TIG',
                'Admin Val dIsère' => 'ROLE_ADMIN_VAL',
                'Admin Le Grand-Bornand' => 'ROLE_ADMIN_LEG',
                'Admin Manigod' => 'ROLE_ADMIN_MAN'
            ]))
            ;
        return $filters;
    }

    public function createIndexQueryBuilder(SearchDto $searchDto, EntityDto $entityDto, FieldCollection $fields, FilterCollection $filters): QueryBuilder
    {
        $user = $this->getUser();
        $role = $this->getRoles()[0];

        $qb = $this->get(CrudUrlGenerator::class)->build()->getQuery()->getQueryBuilder();

        switch ($role) {
            case 'ROLE_SUPER_ADMIN':
                // Ici le super admin
                break;
            case 'ROLE_ADMIN_MON':
                $qb->andWhere('entity.admin = :admin')
                    ->setParameter('admin', 'ROLE_ADMIN_MON');
                break;
            case 'ROLE_ADMIN_VEN':
                $qb->andWhere('entity.admin = :admin')
                    ->setParameter('admin', 'ROLE_ADMIN_VEN');
                break;
            case 'ROLE_ADMIN_TIG':
                $qb->andWhere('entity.admin = :admin')
                    ->setParameter('admin', 'ROLE_ADMIN_TIG');
                break;
            case 'ROLE_ADMIN_VAL':
                $qb->andWhere('entity.admin = :admin')
                    ->setParameter('admin', 'ROLE_ADMIN_VAL');
                break;
            case 'ROLE_ADMIN_LEG':
                $qb->andWhere('entity.admin = :admin')
                    ->setParameter('admin', 'ROLE_ADMIN_LEG');
                break;
            case 'ROLE_ADMIN_MAN':
                $qb->andWhere('entity.admin = :admin')
                    ->setParameter('admin', 'ROLE_ADMIN_MAN');
                break;
        }
        return $qb;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            AssociationField::new('domaine'),
            TextField::new('name'),
            TextEditorField::new('description'),
            ImageField::new('logo')
                ->setUploadDir('public/uploads/station')
                ->setBasePath('uploads/station')
                ->setUploadedFileNamePattern('[slug]-[randomhash].[extension]'),
        ];
    }
}
