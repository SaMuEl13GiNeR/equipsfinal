<?php

namespace App\Controller\Admin;

use App\Entity\Cicle;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CicleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Cicle::class;
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
