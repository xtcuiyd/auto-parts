<?php

namespace App\Admin\Controllers;

use App\Part;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class PartController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('Parts List');
            $content->description('');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('Create New Part');
            $content->description('');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Part::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->column('parts_num');
            $grid->column('name');
            $grid->column('level');
            $grid->column('standard_price');
            $grid->column('length');
            $grid->column('width');
            $grid->column('height');
            $grid->column('weight');
            $grid->created_at();
            $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Part::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('parts_num')->rules('required|min:3');
            $form->text('name')->rules('required|min:3');
            $form->text('level')->rules('required');
            $form->text('standard_price')->rules('required');
            $form->text('length')->rules('required');
            $form->text('width')->rules('required');
            $form->text('height')->rules('required');
            $form->text('weight')->rules('required');
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
