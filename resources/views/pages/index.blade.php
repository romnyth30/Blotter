@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-2 border border-top-0 border-bottom-0 border-left-0 shadow-lg p-4 mb-4 bg-white">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Clearance</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('pages.index') }}">Blotter</a>
            </li>
        </ul>
    </div>
    <div class="col-md-10">
        <div class="shadow-lg p-4 mb-4 bg-white clearfix">
            <h3 class="float-left">Blotter Records</h3>
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#myModal">Create Records</button>
            <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Create Blotter Records</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('pages.store') }}">
                                {{ csrf_field() }}
                                 <div class="form-group">
                                    <label for="project-name">Case</label>
                                    <input placeholder="Enter name" id="project-name" class="form-control" required="" />
                                </div>
                                <div class="form-group">
                                    <label for="project-name">Address</label>
                                    <input placeholder="Enter name" id="project-name" class="form-control" required="" />
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="project-name">Victim</label>
                                            <input placeholder="Enter name" id="project-name" class="form-control" required="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="project-name">Sucject</label>
                                            <input placeholder="Enter name" id="project-name" class="form-control" required="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="facts">Facts</label>
                                    <textarea placeholder="Enter description" id="article-ckeditor" name="facts" class="form-control autosize-target text-left"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <table class="table shadow-lg p-4 mb-4 bg-white">
            <thead>
                <tr>
                    <th>Victim</th>
                    <th>Subject</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John</td>
                    <td>Doe</td>
                    <td>01/01/01</td>
                </tr>
                <tr>
                    <td>Mary</td>
                    <td>Moe</td>
                    <td>01/01/01</td>
                </tr>
                <tr>
                    <td>July</td>
                    <td>Dooley</td>
                    <td>01/01/01</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection