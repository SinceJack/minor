<?php

namespace App\Admin\Controllers;

use App\ProgramContent;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProgramContentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\ProgramContent';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProgramContent);

        $grid->column('id', __('Id'));
        $grid->column('program.protitle', __('公开课名称'));
        $grid->column('title', __('标题'));
        $grid->column('intro', __('简介'));
        $grid->column('picture', __('图片'))->image();
        $grid->column('created_at', __('创建时间'));
        $grid->column('updated_at', __('更新时间'));

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
        $show = new Show(ProgramContent::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('program_id', __('公开课名称'));
        $show->field('title', __('标题'));
        $show->field('intro', __('简介'));
        $show->field('picture', __('图片'))->image();
        $show->field('created_at', __('创建时间'));
        $show->field('updated_at', __('更新时间'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ProgramContent);
        //TODO:公开课select列表的查询还没有实现
        $form->select('program_id', __('公开课名称'));
        $form->text('title', __('标题'));
        $form->text('intro', __('简介'));
        $form->image('picture', __('图片'));

        return $form;
    }
}
