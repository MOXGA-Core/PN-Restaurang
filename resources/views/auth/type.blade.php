@extends('frontend.layouts.app')

@section('content')

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="formAdd" action="{{ url('/admin/type') }}" method="post">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Add Type</h4>
                    </div>
                    <div class="modal-body">

                        {{ csrf_field() }}

                        <div class="input-group"><span id="basic-addon1" class="input-group-addon">Type Name</span>
                            <input type="text" name="name" placeholder="Type Name" aria-describedby="basic-addon1" class="form-control"></div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Type</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Types
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-success btn-sm "  data-toggle="modal" data-target="#myModal" style="height: 80%;height: 30px">Add Type</button>
                        </div>
                    </div>

                    <div class="panel-body">
                        <table class="table">

                            <tr>
                                <th>#</th>
                                <th>Type</th>
                                <th></th>
                            </tr>
                            @foreach ($types as $type)
                                <tr>
                                    <td>{{ $type->id }}</td>
                                    <td>{{ $type->type }}</td>
                                    <td>
                                        <form id="form{{ $type->id }}" action="{{ url('/admin/type/'.$type->id) }}" method="post" style="display: none;">
                                            {{ method_field('delete') }}
                                            {{ csrf_field() }}
                                        </form>
                                        <div class="btn-group">
                                            <button type="button"  onclick="if(confirm('Do you want to delete this type?')){event.preventDefault();
                                                    document.getElementById('form{{ $type->id }}').submit();} else { return true} " class="btn btn-danger">Del</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
