@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Product

                    </div>

                    <div class="panel-body">
                        <div align="center" class="row" style="width: 80%; margin-left: 20px">
                            <form method="post" action="{{ url('/admin/product') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Name</span>
                                    <input type="text" name="name" class="form-control" placeholder="Name"
                                           aria-describedby="basic-addon1">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Amount</span>
                                    <input type="number" name="amount" class="form-control" placeholder="0.00"
                                           aria-describedby="basic-addon1">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Category</span>
                                    <input type="text" name="category" class="form-control" placeholder="Dinner"
                                           aria-describedby="basic-addon1">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Tag</span>
                                    <input type="text" name="tag" class="form-control" placeholder="pomotion,"
                                           aria-describedby="basic-addon1">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Detail</span>
                                    <input type="text" name="detail" class="form-control" placeholder="Detail"
                                           aria-describedby="basic-addon1">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Picture</span>
                                    <input type="file" name="picture" class="form-control"
                                           aria-describedby="basic-addon1">
                                </div>
                                <br>
                                <div class="btn-group">
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                                <div class="btn-group">
                                    <a type="button" href="{{ url('/admin/home') }}" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
