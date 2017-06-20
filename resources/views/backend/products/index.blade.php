@extends('backend.layouts.app')

@section('content')
    <style>
        .items {
            color: red;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Products</h4>
                    </div>

                    <div class="panel-body">
                        {!! $html->table(['class' => 'table table-bordered']) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Add</h4>
                    </div>

                    <div class="panel-body">
                        {!! Form::open(['route' => 'backend.products.store', 'files' => true]) !!}
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Name</span>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Course</span>
                                    <select name="category" class="form-control">
                                        @foreach($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Type</span>
                                    <select name="type" class="form-control" id="TypeValue">
                                        @foreach($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="page-header">
                                <div class="pull-right">
                                    <button type="button" id="add-btn" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> Add</button>
                                </div>
                                <h5>Price</h5>
                            </div>

                            <div id="prices">
                                
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success">Add Product</button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('javascript')
{!! $html->scripts() !!}

<script>
    $(function() {
        $('#add-btn').click(function() {

        });
    });
</script>
@endpush
