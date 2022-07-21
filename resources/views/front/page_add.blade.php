@extends('front.layouts.app')
@section('content')
    @section('page_title',$result[0]->name)
    @section('page_name',$result[0]->name)
    <p>{{$result[0]->desciption}}</p>
@endsection
