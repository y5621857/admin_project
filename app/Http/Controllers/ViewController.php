<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//---------------------------------------报错页-------------------------------------------------------------------------
    public function error404(Request $request){
        return view('errors.404');
    }

    public function error500(){
        return view('errors.500');
    }

//---------------------------------------登录页-------------------------------------------------------------------------
    public function login(){
        return view('login');
    }

//---------------------------------------首页-------------------------------------------------------------------------
    public function index(){
        return view('templates.index');
    }

//---------------------------------------table页-------------------------------------------------------------------------
    public function table(){
        return view('templates.table.table');
    }

//---------------------------------------图表页-------------------------------------------------------------------------
    public function chart(){
        return view('templates.chart.chart');
    }

    public function chart1(){
        return view('templates.chart.chart1');
    }

    public function chart2(){
        return view('templates.chart.chart2');
    }

//---------------------------------------email页------------------------------------------------------------------------
    public function email(){
        return view('templates.email.email');
    }

//---------------------------------------userData页---------------------------------------------------------------------
    public function userData(){
        return view('templates.userData.userData');
    }

//---------------------------------------文档详情页---------------------------------------------------------------------
    public function contentPage(){
        return view('templates.contentPage.contentPage');
    }

//---------------------------------------编辑页-------------------------------------------------------------------------
    public function form(){
        return view('templates.form.form');
    }

//---------------------------------------时间轴页-------------------------------------------------------------------------
    public function timeLine(){
        return view('templates.timeLine.timeLine');
    }

//---------------------------------------打印页-------------------------------------------------------------------------
    public function printPage(){
        return view('templates.print.print');
    }

//---------------------------------------流程向导页---------------------------------------------------------------------
    public function step(){
        return view('templates.step.step');
    }

//---------------------------------------惰性加载页---------------------------------------------------------------------\
    public function flow(){
        return view('templates.flow.flow');
    }

//---------------------------------------socket页-----------------------------------------------------------------------
    public function socket(){
        return view('templates.socket.socket');
    }

//---------------------------------------剪裁页-------------------------------------------------------------------------
    public function cropper(){
        return view('templates.cropper.cropper');
    }

//---------------------------------------登录页-------------------------------------------------------------------------
//---------------------------------------登录页-------------------------------------------------------------------------
//---------------------------------------登录页-------------------------------------------------------------------------
//---------------------------------------登录页-------------------------------------------------------------------------
//---------------------------------------登录页-------------------------------------------------------------------------

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
