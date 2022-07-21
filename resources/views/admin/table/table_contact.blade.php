@extends('admin.layouts.app')
@section('content')
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
            <a  href="">Add Post</a>
            {{session('msg')}}
          <h3>post </h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5   form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>
      <div class="row" style="display: block;">
        <div class="col-md-6 col-sm-6  ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Basic Tables <small>basic table subtitle</small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              <table class="table">
                <thead>
                  <tr>
                    <th >ID</th>
                    <th >name</th>
                    <th >email</th>
                      <th  >mobile</th>
                    <th >message</th>
{{--                    <th >Action</th>--}}
                  </tr>
                </thead>
                <tbody>
                @foreach($result as $list)
                  <tr>
                    <td >{{$list->id}}</td>
                    <td >{{$list->name}}</td>
                    <td >{{$list->email}}</td>
                      <td >{{$list->mobile}}</td>
                    <td >{{$list->message}}</td>
{{--                      <td>--}}
{{--                          <a href=" {{route('form_edit',[$list->id])}}">  <button type ="button" class="btn btn-info" >Edit</button></a>--}}
{{--                          <a href=" {{route('submission_delete',[$list->id])}}"><button type ="button" class="btn btn-danger" >Delete</button></a>--}}
{{--                      </td>--}}
                      @endforeach
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>










@endsection
