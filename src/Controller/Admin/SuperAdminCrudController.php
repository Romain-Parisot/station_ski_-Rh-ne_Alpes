<?php

namespace App\Controller\Admin;

use App\Entity\SuperAdmin;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\QueryBuilder;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FieldCollection;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FilterCollection;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\SearchDto;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\ChoiceFilter;

class SuperAdminCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SuperAdmin::class;
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
        $qb = $this->get(CrudUrlGenerator::class)->build()->getQuery()->getQueryBuilder();
        $qb = $this->modifyQueryBuilderForRole($qb);

        return $qb;
    }

    public function createNewEntity()
    {
        $admindashboard = new Dashboard();
        $admindashboard = $this->modifyEntityForRole($admindashboard);

        return $admindashboard;
    }

    public function updateEntity(EntityDto|EntityManagerInterface $entityDto, $entityInstance)
    {
        $entityInstance = $this->modifyEntityForRole($entityInstance);

        parent::updateEntity($entityDto, $entityInstance);
    }

    public function deleteEntity(EntityDto|EntityManagerInterface $entityDto, $entityInstance)
    {
        $entityInstance = $this->modifyEntityForRole($entityInstance);

        parent::deleteEntity($entityDto, $entityInstance);
    }

    private function modifyQueryBuilderForRole(QueryBuilder $qb): QueryBuilder
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

    private function modifyEntityForRole(Dashboard $admindashboard): Dashboard
    {
        $user = $this->getUser();
        $role = $this->getRoles()[0];

        switch ($role) {
            case 'ROLE_SUPER_ADMIN':
                // Ici le super admin
                break;
            case 'ROLE_ADMIN_MON':
                $admindashboard->setAdmin('ROLE_ADMIN_MON');
                break;
            case 'ROLE_ADMIN_VEN':
                $admindashboard->setAdmin('ROLE_ADMIN_VEN');
                break;
            case 'ROLE_ADMIN_TIG':
                $admindashboard->setAdmin('ROLE_ADMIN_TIG');
                break;
            case 'ROLE_ADMIN_VAL':
                $admindashboard->setAdmin('ROLE_ADMIN_VAL');
                break;
            case 'ROLE_ADMIN_LEG':
                $admindashboard->setAdmin('ROLE_ADMIN_LEG');
                break;
            case 'ROLE_ADMIN_MAN':
                $admindashboard->setAdmin('ROLE_ADMIN_MAN');
                break;
        }
        return $admindashboard;
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
