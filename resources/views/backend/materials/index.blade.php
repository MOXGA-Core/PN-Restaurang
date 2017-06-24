@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @include('components.alert')
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Materials</h4>
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Icon</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($materials as $material)
                                    <tr>
                                        <td>{{ $material->id }}</td>
                                        <td>{!! $material->renderIcon() !!}</td>
                                        <td>{{ $material->name }}</td>
                                        <td>
                                            <a href="#" data-id="{{ $material->id }}" class="edit-btn btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
                                            <a href="#" data-id="{{ $material->id }}" class="delete-btn btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">No data available in table</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div id="add-panel" class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Add</h4>
                    </div>

                    <div class="panel-body">
                        @include('components.validation')

                        {!! Form::open(['route' => 'backend.materials.store', 'files' => true]) !!}
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Icon</span>
                                    <input type="file" id="iconImage" name="iconImage" class="form-control" accept="image/*">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Name</span>
                                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
                                </div>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok-circle"></span> Save !</button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="deleteModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                {!! Form::open(['route' => 'backend.materials.index', 'method' => 'DELETE']) !!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title">Confirm to delete this material ?</h3>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Confirm</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@push('javascript')
<script>
    $(function() {
        var bindDeleteBtn = function() {
            $('.delete-btn').click(function() {
                var $modal = $('#deleteModal');
                var url = $modal.find('form').attr('action');
                var id = $(this).data('id');

                $modal.find('form').attr('action', url + '/' + id);
                $modal.modal('show');
            });
        };

        var bindEditBtn = function() {
            $('.edit-btn').click(function() {
                var id = $(this).data('id');
                $('#edit-panel').remove();

                $.ajax({
                    method: "GET",
                    url: "{{ route('backend.materials.index') }}/" + id,
                    success: function(html) {
                        $('#add-panel').hide().parent().prepend(html);
                        $('#edit-panel').slideDown();
                        bindCancelBtn();
                    },
                    error: function() {
                        alert('error !');
                    }
                })
            });
        };

        var bindCancelBtn = function() {
            $('.cancel-btn').click(function() {
                $('#edit-panel').remove();
                $('#add-panel').slideDown();
            });
        };

        bindEditBtn();
        bindDeleteBtn();
    });
</script>
@endpush