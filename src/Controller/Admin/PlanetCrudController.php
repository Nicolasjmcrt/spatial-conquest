<?php

namespace App\Controller\Admin;

use App\Entity\Planet;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PlanetCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Planet::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
                ->hideOnForm(),
            TextField::new('name'),
            SlugField::new('slug')
                ->setTargetFieldName('name')
                ->hideOnIndex(),
            TextField::new('intro'),
            TextField::new('length_of_year'),
            TextField::new('planet_type'),
            ImageField::new('hero_img')
                ->setBasePath('uploads/img/planets')
                ->setUploadDir('public/uploads/img/planets')
                ->setUploadedFileNamePattern('[slug]-[timestamp].[extension]')
                ->setRequired(true),
            TextEditorField::new('content')
                ->setFormType(CKEditorType::class)
                ->hideOnIndex(),
            TextField::new('fact_name1')
                ->hideOnIndex(),
            TextEditorField::new('fact_text1')
                ->setFormType(CKEditorType::class)
                ->hideOnIndex(),
            TextField::new('fact_name2')
                ->hideOnIndex(),
            TextEditorField::new('fact_text2')
                ->setFormType(CKEditorType::class)
                ->hideOnIndex(),
            TextField::new('fact_name3')
                ->hideOnIndex(),
            TextEditorField::new('fact_text3')
                ->setFormType(CKEditorType::class)
                ->hideOnIndex(),
            TextField::new('fact_name4')
                ->hideOnIndex(),
            TextEditorField::new('fact_text4')
                ->setFormType(CKEditorType::class)
                ->hideOnIndex(),
            TextField::new('fact_name5')
                ->hideOnIndex(),
            TextEditorField::new('fact_text5')
                ->setFormType(CKEditorType::class)
                ->hideOnIndex(),
            TextField::new('fact_name6')
                ->hideOnIndex(),
            TextEditorField::new('fact_text6')
                ->setFormType(CKEditorType::class)
                ->hideOnIndex(),
            TextField::new('fact_name7')
                ->hideOnIndex(),
            TextEditorField::new('fact_text7')
                ->setFormType(CKEditorType::class)
                ->hideOnIndex(),
            TextField::new('fact_name8')
                ->hideOnIndex(),
            TextEditorField::new('fact_text8')
                ->setFormType(CKEditorType::class)
                ->hideOnIndex(),
            TextField::new('fact_name9')
                ->hideOnIndex(),
            TextEditorField::new('fact_text9')
                ->setFormType(CKEditorType::class)
                ->hideOnIndex(),
            TextField::new('fact_name10')
                ->hideOnIndex(),
            TextEditorField::new('fact_text10')
                ->setFormType(CKEditorType::class)
                ->hideOnIndex(),
            ImageField::new('planet_img1')
                ->setBasePath('uploads/img/planets')
                ->setUploadDir('public/uploads/img/planets')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(true)
                ->hideOnIndex(),
            TextField::new('img_caption1')
                ->hideOnIndex(),
            ImageField::new('planet_img2')
                ->setBasePath('uploads/img/planets')
                ->setUploadDir('public/uploads/img/planets')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(true)
                ->hideOnIndex(),
            TextField::new('img_caption2')
                ->hideOnIndex(),
            ImageField::new('planet_img3')
                ->setBasePath('uploads/img/planets')
                ->setUploadDir('public/uploads/img/planets')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(true)
                ->hideOnIndex(),
            TextField::new('img_caption3')
                ->hideOnIndex(),
            ImageField::new('planet_img4')
                ->setBasePath('uploads/img/planets')
                ->setUploadDir('public/uploads/img/planets')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(true)
                ->hideOnIndex(),
            TextField::new('img_caption4')
                ->hideOnIndex(),
            ImageField::new('planet_img5')
                ->setBasePath('uploads/img/planets')
                ->setUploadDir('public/uploads/img/planets')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(true)
                ->hideOnIndex(),
            TextField::new('img_caption5')
                ->hideOnIndex(),
            ImageField::new('planet_img6')
                ->setBasePath('uploads/img/planets')
                ->setUploadDir('public/uploads/img/planets')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(true)
                ->hideOnIndex(),
            TextField::new('img_caption6')
                ->hideOnIndex(),
        ];
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->addFormTheme('@FOSCKEditor/Form/ckeditor_widget.html.twig')
            ->setPageTitle(Crud::PAGE_INDEX, 'Planets')
            ->setPageTitle(Crud::PAGE_NEW, 'New planet')
            ->setPageTitle(Crud::PAGE_EDIT, 'Edit planet')
            ->setPageTitle(Crud::PAGE_DETAIL, static function (Planet $planet) {
                return sprintf('#%s %s', $planet->getId(), $planet->getName());
            })
            ->setSearchFields(['name', 'intro', 'content', 'planet_type', 'length_of_year', 'fact_name1', 'fact_name2', 'fact_name3', 'fact_name4', 'fact_name5', 'fact_name6', 'fact_name7', 'fact_name8', 'fact_name9', 'fact_name10', 'fact_text1', 'fact_text2', 'fact_text3', 'fact_text4', 'fact_text5', 'fact_text6', 'fact_text7', 'fact_text8', 'fact_text9', 'fact_text10'])
            ->setDefaultSort(['id' => 'DESC']);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add('name')
            ->add('planetType');
    }
}
