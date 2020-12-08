<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ImagesRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ImagesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ImagesCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Images::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/images');
        CRUD::setEntityNameStrings('images', 'images');
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
            'name' => 'projet',
            'type' => 'select',
            'label' => "Projet",
            'entity' => 'projet',
            'attribute' => 'nom',
            'model' => "App\Models\Projet", // foreign key model
            'pivot' => false,
        ]);
        $this->crud->addColumn([
            'name' => 'nom', // The db column name
            'label' => "nom", // Table column heading
            'type' => 'text'
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
        CRUD::setValidation(ImagesRequest::class);

        $this->crud->addFields([
            [
                'name' => 'projet_id',
                'type' => 'select2',
                'label' => "Projet",
                'entity' => 'projet',
                'attribute' => 'nom',
               
                'model' => "App\Models\Projet", // foreign key model
                
            ],
            [
                'name'  => 'nom',
                'type'  => 'hidden',
                'label' => 'nom de l\'image',
                
            ],
            [
                'label' => 'Image',
                'name'  => 'image',
                'type'  => 'upload',
                'upload' => true,
            ],
        ]);
        
       if(request()->file('image') != null) {
           $value=request()->file('image');
           $filename=$value->getClientOriginalName();
           request()->merge(array("nom"=>$filename));
           
       
       
       }
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
