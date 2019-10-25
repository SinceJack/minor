<?php

namespace App\Admin\Controllers;

use App\Adver;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AdverController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Adver';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Adver);

        $grid->column('id', __('Id'));
        $grid->column('adentitle', __('广告标题'));
        $grid->column('adcntitle', __('英文标题'));
        $grid->column('adimg', __('广告图片'))->image();
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
        $show = new Show(Adver::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('adentitle', __('广告标题'));
        $show->field('adcntitle', __('英文标题'));
        $show->field('adimg', __('广告图片'))->image();
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
        $form = new Form(new Adver);

        $form->text('adentitle', __('英文标题'));
        $form->text('adcntitle', __('中文标题'));
        $form->file('adimg', __('banner图片'));

        return $form;
    }
}
