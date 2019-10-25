<?php

namespace App\Admin\Controllers;

use App\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User);

        $grid->column('id', __('Id'));
        $grid->column('Name', __('姓名'));
        $grid->column('Email', __('邮箱'));
//        $grid->column('email_verified_at', __('Email verified at'));
//        $grid->column('password', __('Password'));
        $grid->column('Photo', __('照片'));
//        $grid->column('remember_token', __('Remember token'));
        $grid->column('Created_at', __('注册时间'));
        $grid->column('Updated_at', __('上次更新'));

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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('Name', __('姓名'));
        $show->field('Email', __('邮箱'));
//        $show->field('email_verified_at', __('Email verified at'));
//        $show->field('password', __('Password'));
        $show->field('Photo', __('照片'));
//        $show->field('remember_token', __('Remember token'));
        $show->field('Created_at', __('注册时间'));
        $show->field('Updated_at', __('上次更新'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User);

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->datetime('email_verified_at', __('Email verified at'))->default(date('Y-m-d H:i:s'));
        $form->password('password', __('Password'));
        $form->text('photo', __('Photo'));
        $form->text('remember_token', __('Remember token'));

        return $form;
    }
}
