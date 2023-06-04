@extends('layouts.adminbase')
@section('title', 'Form')
@section('content')

                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Property data table</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <a href="{{route('admin_news_create')}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i  class="zmdi zmdi-plus"></i>add item</a>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" table-responsive table-responsive-data2">

                                    <table class="container table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>
                                                <th scope="col">Id</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Keywords</th>
                                                <th scope="col">content1</th>
                                                <th scope="col">content2</th>
                                                <th scope="col">image</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($newsdata as $item)

                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->title}}</td>
                                                <td>{{$item->keyword}}</td>
                                                <td>
                                                    <span class="block-link"> {{$item->description}}</span>
                                                </td>
                                                <td>{{$item->content1}}</td>
                                                <td>{{$item->content2}}</td>
                                                <td><img src="{{Storage::url($item->image)}}" alt=""></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="{{route('admin_news_edit',['id'=>$item->id])}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i  class="zmdi zmdi-edit"></i>
                                                        </a>

                                                        <a href="{{route("admin_news_show",['id'=>$item->id])}}" class="item" data-toggle="tooltip" data-placement="top" title="Show">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </a>

                                                        <a href="{{route("admin_news_destroy",['id'=>$item->id])}}" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <style>
                                        table {
                                            width: 100%;
                                            table-layout: fixed;
                                            height: 20px;

                                        }
                                    </style>
                                </div>

                                <!-- END DATA TABLE -->


@endsection
