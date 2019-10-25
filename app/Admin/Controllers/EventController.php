<?php

namespace App\Admin\Controllers;

use App\Event;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class EventController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Event';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Event);

        $grid->column('id', __('Id'));
        $grid->column('evetime', __('事件时间'));
        $grid->column('evetitle', __('事件标题'));
        $grid->column('evelocation', __('事件位置'));
        $grid->column('eveimg', __('事件插图'))->image();
//        $grid->column('evecontent', __('事件详情'));
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
        $show = new Show(Event::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('evetime', __('事件时间'));
        $show->field('evetitle', __('事件标题'));
        $show->field('evelocation', __('事件位置'));
        $show->field('eveimg', __('事件插图'))->image();
        $show->field('evecontent', __('事件详情'));
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
        $form = new Form(new Event);

        $form->datetime('evetime', __('时间'));
        $form->text('evetitle', __('标题'));
        $form->text('evelocation', __('地点'));
        $form->file('eveimg', __('插图'));
        $form->editor('evecontent', __('详情'));

        return $form;
    }
}
