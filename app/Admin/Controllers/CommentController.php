<?php

namespace App\Admin\Controllers;

use App\Comment;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CommentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Comment';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Comment);

        $grid->column('id', __('Id'));
        $grid->column('news_id', __('新闻id'));
        $grid->column('comauthor', __('作者'));
//        $grid->column('comcontent', __('内容'));
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
        $show = new Show(Comment::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('news_id', __('新闻id'));
        $show->field('comauthor', __('作者'));
        $show->field('comcontent', __('内容'));
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
        $form = new Form(new Comment);

        $form->number('news_id', __('News id'));
        $form->text('comauthor', __('Comauthor'));
        $form->text('comcontent', __('Comcontent'));

        return $form;
    }
}
