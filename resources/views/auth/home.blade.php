@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                    <div class="btn-group pull-right">
                        <a type="button" class="btn btn-success btn-sm " href="{{ url('/admin/product') }}" style="height: 80%;height: 30px">Add Product</a>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-6 col-md-3">
                              <img src="..." style="width: 128px; height: 128px" alt="...">

                        </div>
                        <p> awdawdadadadadadaw awdawdadawdawdwad .....</p>
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger">Edit</button>
                        </div>
                     </div>
                </div>
                <hr>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-6 col-md-3">
                            <img src="..." style="width: 128px; height: 128px" alt="...">

                        </div>
                        <p>awdawdadadadadadaw awdawdadawdawdwad .....</p>

                        <div class="btn-group">
                            <button type="button" class="btn btn-danger">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
