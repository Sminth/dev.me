<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProjetRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProjetCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProjetCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Projet::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/projet');
        CRUD::setEntityNameStrings('projet', 'projets');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'nom', // The db column name
            'label' => "nom", // Table column heading
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name'  => 'logo',
            'label' => 'logo',
            'type' => 'image',
            
        ]);
        $this->crud->addColumn([
            'name'  => 'detail',
            'label' => 'detail',
            'type' => 'text',
        ]);
        $this->crud->addColumn([
            'name'  => 'langage',
            'label' => 'langage utilisé',
            'type' => 'text',
        ]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ProjetRequest::class);

        CRUD::field('nom')->type('text');
        $this->crud->addField(
            [   // Browse
                'label' => "image",
                'name' => "logo",
                'type' => 'upload',
                'upload' => true,
                
            ]
        );
        CRUD::field('detail')->type('text');
        $this->crud->addField(
            [
                'name'  => 'liensite',
                'type' => 'text',
                'label' => 'lien du site',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6'
                ],
            ]
        );
        $this->crud->addField(
            [
                'name'  => 'liengithub',
                'type' => 'text',
                'label' => 'lien du code source',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6'
                ],
            ]
        );
        $this->crud->addField(
            [
                'name'  => 'langage',
                'type' => 'text',
                'label' => 'langage utilisé',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6'
                ],
            ]
        );
        $this->crud->addField(
            [
                'name'  => 'progression',
                'type' => 'number',
                'label' => 'progression',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6'
                ],
            ]
        );
        $this->crud->addField( [
            'name'  => 'description',
            'type'  => 'wysiwyg',
            'label' => 'description du projet',
        ]);

   // request()->merge(array(request()->input('logo')=>request()->input('logo')->getClientOriginalName()));

    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
