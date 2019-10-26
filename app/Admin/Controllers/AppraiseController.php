<?php

namespace App\Admin\Controllers;

use App\Appraise;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AppraiseController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Appraise';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Appraise);

        $grid->column('id', __('Id'));
        $grid->column('appimg', __('用户头像'))->image();
        $grid->column('apprname', __('用户名称'));
        $grid->column('apprjob', __('用户职业'));
        $grid->column('apprcontent', __('评论详情'));
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
        $show = new Show(Appraise::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('appimg', __('用户头像'))->image();
        $show->field('apprname', __('用户名称'));
        $show->field('apprjob', __('用户职业'));
        $show->field('apprcontent', __('评论详情'));
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
        $form = new Form(new Appraise);

        $form->file('appimg', __('照片'));
        $form->text('apprname', __('昵称'));
        $form->text('apprjob', __('职业'));
        $form->text('apprcontent', __('评论内容'));

        return $form;
    }
}
