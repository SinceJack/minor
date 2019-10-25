<?php

namespace App\Admin\Controllers;

use App\Program;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProgramController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Program';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Program);

        $grid->column('id', __('Id'));
        $grid->column('proimg', __('公开课图片'))->image();
        $grid->column('protitle', __('公开课标题'));
        $grid->column('prointro', __('公开课简介'));
//        $grid->column('procontent', __('公开课详情'));
        $grid->column('prosuit', __('适合人群'));
        $grid->column('pronumber', __('班级人数'));
        $grid->column('protime', __('开课时间'));
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
        $show = new Show(Program::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('proimg', __('公开课图片'))->image();
        $show->field('protitle', __('公开课标题'));
        $show->field('prointro', __('公开课简介'));
        $show->field('procontent', __('公开课详情'));
        $show->field('prosuit', __('适合人群'));
        $show->field('pronumber', __('班级人数'));
        $show->field('protime', __('开课时间'));
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
        $form = new Form(new Program);

        $form->file('proimg', __('公开课图片'));
        $form->text('protitle', __('标题'));
        $form->text('prointro', __('简介'));
        $form->text('procontent', __('详情'));
        $form->text('prosuit', __('适合人群'));
        $form->number('pronumber', __('班级人数'));
        $form->datetime('protime', __('开课时间'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
