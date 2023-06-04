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
                                        <a href="{{route('admin_property_create')}}"class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i  class="zmdi zmdi-plus"></i>add item</a>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
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
                                                <th scope="col">keywords</th>
                                                <th scope="col">description</th>
                                                <th scope="col">amenities</th>
                                                <th scope="col">location</th>
                                                <th scope="col">area</th>
                                                <th scope="col">baths</th>
                                                <th scope="col">beds</th>
                                                <th scope="col">garage</th>
                                                <th scope="col">video</th>
                                                <th scope="col">date</th>
                                                <th scope="col">images</th>
                                                <th scope="col">status</th>
                                                <th scope="col">price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($propertydata as $item)

                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->title}}</td>
                                                <td>
                                                    <span class="block-email">{{$item->keywords}}</span>
                                                </td>
                                                <td class="desc">{{$item->description}}</td>
                                                <td>{{$item->amenities}}</td>
                                                <td>{{$item->location}}</td>
                                                <td>{{$item->area}}</td>
                                                <td>{{$item->bath}}</td>
                                                <td>{{$item->beds}}</td>
                                                <td>{{$item->garage}}</td>
                                                <td>{{$item->video}}</td>
                                                <td>{{$item->time}}</td>
                                                <td>{{$item->image}}</td>
                                                <td>{{$item->status}}</td>
                                                <td>{{$item->price}}</td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <!-- END DATA TABLE -->


@endsection
