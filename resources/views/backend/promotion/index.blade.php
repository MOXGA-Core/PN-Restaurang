@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Promotion now.</h4>
                    </div>

                    <div class="panel-body">
                        @if($promotion)
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ url($promotion->profileImage) }}" alt="" class="img-responsive">
                                </div>
                                <div class="col-md-6">
                                    <h2>{{ $promotion->title }}</h2>
                                    <p>{{ $promotion->detail }}</p>
                                    <button class="btn btn-danger delete-btn" data-toggle="modal" data-target="#deleteModal"><span class="glyphicon glyphicon-remove"></span> Delete</button>
                                </div>
                            </div>
                        @else
                            <i>There is no promotion right now.</i>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Add new promotion</h4>
                    </div>

                    <div class="panel-body">
                        @include('components.validation')

                        {!! Form::open(['route' => 'backend.promotion.store', 'files' => true]) !!}
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Image</span>
                                    <input type="file" id="profileImage" name="profileImage" class="form-control" accept="image/*" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Title</span>
                                    <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Description</span>
                                    <textarea name="detail" id="detail" class="form-control" required>{{ old('detail') }}</textarea>
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

    @if($promotion)
        <div id="deleteModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    {!! Form::open(['route' => ['backend.promotion.destroy', $promotion->id], 'method' => 'DELETE']) !!}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title">Confirm to delete this Promotion ?</h3>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Confirm</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    @endif
@endsection