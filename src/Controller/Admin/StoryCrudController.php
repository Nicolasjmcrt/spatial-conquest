<?php

namespace App\Controller\Admin;

use App\Entity\Story;
use DateTimeImmutable;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class StoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Story::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
                ->hideOnForm(),
            TextField::new('title'),
            SlugField::new('slug')
                ->setTargetFieldName('title')
                ->hideOnIndex(),
            TextEditorField::new('content')
                ->hideOnIndex(),
            AssociationField::new('category')
                ->setQueryBuilder(function(QueryBuilder $queryBuilder) {
                    $queryBuilder->where('entity.isActive = true');
                }),
            DateTimeField::new('createdAt')
                ->hideOnForm(),
        ];
    }

    public function persistEntity(EntityManagerInterface $entityManager, $entityInstance): void
        {
            if (!$entityInstance instanceof Story) return;

            $entityInstance->setCreatedAt(new DateTimeImmutable());

            parent::persistEntity($entityManager, $entityInstance);
        }
    
}
