@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @include('components.alert')

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Messages</h4>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Sender Name</th>
                                <th>Email</th>
                                <th>Phone No.</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($messages as $message)
                                <tr{!! $message->read ? '' : ' class="warning"' !!}>
                                    <td>{{ $message->id }}</td>
                                    <td>{{ $message->name }}</td>
                                    <td>{{ $message->email }}</td>
                                    <td>{{ $message->phoneNo }}</td>
                                    <td>{{ $message->message }}</td>
                                    <td>
                                        {!! Form::open(['route' => ['backend.messages.update', $message->id], 'method' => 'PUT']) !!}
                                            @if($message->read)
                                                <button type="submit" class="btn btn-primary" data-toggle="tooltip" title="Mark as unread"><i class="glyphicon glyphicon-eye-close"></i></button>
                                            @else
                                                <button type="submit" class="btn btn-primary" data-toggle="tooltip" title="Mark as read"><i class="glyphicon glyphicon-eye-open"></i></button>
                                            @endif
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">No data available in table</td>
                                </tr>
                            @endforelse
                        </tbody>

                        <div class="text-right">
                            {!! $messages->render() !!}
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('javascript')
<script>
    $(function() {
       $('[data-toggle="tooltip"]').tooltip();
    });
</script>
@endpush