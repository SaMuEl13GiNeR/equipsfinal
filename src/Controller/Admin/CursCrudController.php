<?php

namespace App\Controller\Admin;

use App\Entity\Curs;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CursCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Curs::class;
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
