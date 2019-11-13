<?php

namespace App\Admin\Controllers;

use App\UserInfo;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserInfoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\UserInfo';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new UserInfo);

        $grid->column('id', __('Id'));
        $grid->column('stuid', __('学号'));
        $grid->column('name', __('姓名'));
//        $grid->column('idcard', __('身份证'));
        $grid->column('phone', __('电话'));
        $grid->column('nickname', __('昵称'));
        $grid->column('wechat', __('微信'));
        $grid->column('job', __('工作'));
        $grid->column('age', __('年龄'));
        $grid->column('sex', __('性别'));
        $grid->column('hobby', __('兴趣'));
//        $grid->column('motto', __('座右铭'));
        $grid->column('llustrator', __('喜欢的插画师'));
        $grid->column('paint', __('绘画基础'));
        $grid->column('software', __('软件基础'));
        $grid->column('device', __('学习设备'));
//        $grid->column('short', __('短期目标'));
//        $grid->column('long', __('长期目标'));
        $grid->column('channel', __('获知渠道'));
        $grid->column('ip', __('用户IP'));
        $grid->column('created_at', __('注册时间'));
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
        $show = new Show(UserInfo::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('stuid', __('学号'));
        $show->field('name', __('姓名'));
        $show->field('idcard', __('身份证'));
        $show->field('phone', __('电话'));
        $show->field('nickname', __('昵称'));
        $show->field('wechat', __('微信'));
        $show->field('job', __('工作'));
        $show->field('age', __('年龄'));
        $show->field('sex', __('性别'));
        $show->field('hobby', __('兴趣'));
        $show->field('motto', __('座右铭'));
        $show->field('llustrator', __('喜欢的插画师'));
        $show->field('paint', __('绘画基础'));
        $show->field('software', __('软件基础'));
        $show->field('device', __('学习设备'));
        $show->field('short', __('短期目标'));
        $show->field('long', __('长期目标'));
        $show->field('channel', __('获知渠道'));
        $show->field('ip', __('用户IP'));
        $show->field('created_at', __('注册时间'));
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
        $form = new Form(new UserInfo);

        $form->number('stuid', __('学号'));
        $form->text('name', __('姓名'));
        $form->text('idcard', __('身份证'));
        $form->mobile('phone', __('电话'));
        $form->text('nickname', __('昵称'));
        $form->text('wechat', __('微信'));
        $form->text('job', __('工作'));
        $form->switch('age', __('年龄'));
        $form->text('sex', __('性别'));
        $form->text('hobby', __('兴趣'));
        $form->text('motto', __('座右铭'));
        $form->text('llustrator', __('喜欢的插画师'));
        $form->text('paint', __('绘画基础'));
        $form->text('software', __('软件基础'));
        $form->text('device', __('学习设备'));
        $form->text('short', __('短期目标'));
        $form->text('long', __('长期目标'));
        $form->text('channel', __('获知渠道'));
        $form->ip('ip', __('用户IP'));

        return $form;
    }
}
