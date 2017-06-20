@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Contact</h4>
                    </div>

                    <div class="panel-body">
                        @include('components.alert')
                        <div align="center" class="row" style="width: 80%; margin-left: 20px">
                            {!! Form::open(['route' => 'backend.contact.store']) !!}
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Name</span>
                                <input type="text" name="name" value="{{ $contact->name }}" class="form-control" placeholder="Restaurant" aria-describedby="basic-addon1">
                            </div><br>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Address</span>
                                <input type="text" name="addr" value="{{ $contact->address }}" class="form-control" placeholder="198/11 USA....." aria-describedby="basic-addon1">
                            </div><br>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Email</span>
                                <input type="email" name="email" value="{{$contact->email}}" class="form-control" placeholder="admin@domain.com" aria-describedby="basic-addon1">
                            </div><br>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Tel</span>
                                <input type="text" name="tel" value="{{ $contact->tel }}" class="form-control" placeholder="+46 176 129 00," aria-describedby="basic-addon1">
                            </div><br>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Facebook</span>
                                <input type="text" name="facebook" value="{{ $contact->facebook }}" class="form-control" placeholder="Wandee Srepenrak" aria-describedby="basic-addon1">
                            </div><br>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Keyword</span>
                                <input type="text" name="keyword" value="{{ $contact->keyword }}" class="form-control" placeholder="Restaurant" aria-describedby="basic-addon1">
                            </div><br>
                            <div class="btn-group">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
