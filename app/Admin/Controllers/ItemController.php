<?php

namespace App\Admin\Controllers;

use App\Models\Item;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ItemController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Item';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {


        $grid = new Grid(new Item());
        $grid->column('no', __('No'));
        $grid->column('type', __('Type'));
        $grid->column('brand', __('Brand'));
        $grid->column('model', __('Model'));
        $grid->column('specification', __('Specification'));
        $grid->column('amount', __('Amount'));
        $grid->column('qty', __('Quantity'));
        $grid->total();
        $grid->column('image',__('Image'))->image('','60','60');
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));


        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Item::findOrFail($id));

        $show->field('no', __('No'));
        $show->field('type', __('Type'));
        $show->field('brand', __('Brand'));
        $show->field('model', __('Model'));
        $show->field('specification', __('Specification'));
        $show->field('amount', __('Amount'));
        $show->field('qty', __('Quantity'));
        $show->image('image',__('Image'))->image();
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {

        $form = new Form(new Item());
        $form->text('no', __('No'));
        $form->text('type', __('Type'));
        $form->text('brand', __('Brand'));
        $form->text('model', __('Model'));
        $form->textarea('specification', __('Specification'));
        $form->number('amount', __('Amount'));
        $form->number('qty', __('Quantity'));
        $form->image('image',__('Image'));
        $form->datetime('created_at', __('Created at'));
        $form->datetime('updated_at', __('Updated at'));



        return $form;
    }
}
