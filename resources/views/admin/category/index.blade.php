@extends('layout.app')

@section('breadcrumb')
<x-breadcrumb pageTitle="Categories">
    <x-slot name="links">
        / <li>Categories</li>
    </x-slot>
</x-breadcrumb>
@endsection


@section('mainContent')

 <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="d-flex justify-content-between mb-4">
                                <h3 class="box-title">Category List</h3>
                                <a href="{{URL::to('admin/categories/add')}}" class="btn btn-outline-primary">New Category</a>
                            </div>
                             
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Category</th>
                                            <th class="border-top-0">Description</th>
                                            <th class="border-top-0">Actions</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php 
                                             $counter=1; 
                                        @endphp
                                        @foreach ($category as $ct)

                                        <tr>
                                            <td>{{$counter++}}</td>
                                            <td>{{$ct->name}}</td>
                                            <td>{{$ct->description}}</td>
                                            <td>
                                                <a href="{{URL::to('admin/categories/edit/'.$ct->id)}}" class="btn btn-primary">Edit</a>
                                            </td>
                                            
                                        </tr>
                                        @endforeach
                                           
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->

@endsection


@section('internal_javascript')

@endsection