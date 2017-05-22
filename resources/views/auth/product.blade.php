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
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Name</span>
                                <input type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon1">
                            </div><br>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Amount</span>
                                <input type="text" class="form-control" placeholder="0.00" aria-describedby="basic-addon1">
                            </div><br>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Category</span>
                                <input type="text" class="form-control" placeholder="Dinner" aria-describedby="basic-addon1">
                            </div><br>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Tag</span>
                                <input type="text" class="form-control" placeholder="pomotion," aria-describedby="basic-addon1">
                            </div><br>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Picture</span>
                                <input type="file" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
