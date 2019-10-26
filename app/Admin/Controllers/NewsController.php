<?php

namespace App\Admin\Controllers;

use App\News;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NewsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\News';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new News);

        $grid->column('id', __('Id'));
//        $grid->column('user_id', __('用户id'));
        $grid->column('newstitle', __('新闻标题'));
//        $grid->column('newscontent', __('新闻详情'));
        $grid->column('newspicture', __('新闻图片'))->image();
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
        $show = new Show(News::findOrFail($id));

        $show->field('id', __('Id'));
//        $show->field('user_id', __('用户id'));
        $show->field('newstitle', __('新闻标题'));
        $show->field('newscontent', __('新闻详情'));
        $show->field('newspicture', __('新闻图片'))->image();
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
        $form = new Form(new News);

//        $form->number('user_id', __('用户id'));
        $form->text('newstitle', __('新闻标题'));
        $form->editor('newscontent', __('新闻内容'));
        $form->file('newspicture', __('新闻图片'));

        return $form;
    }
}
