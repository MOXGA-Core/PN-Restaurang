@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Contact

                    </div>

                    <div class="panel-body">
                        <div align="center" class="row" style="width: 80%; margin-left: 20px">
                            <form method="post" action="{{ url('/admin/contact') }}">

                                {{ csrf_field() }}
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Name</span>
                                <input type="text" name="name" value="{{ $config->name }}" class="form-control" placeholder="Restaurant" aria-describedby="basic-addon1">
                            </div><br>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Address</span>
                                <input type="text" name="addr" value="{{ $config->address }}" class="form-control" placeholder="198/11 USA....." aria-describedby="basic-addon1">
                            </div><br>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Email</span>
                                <input type="email" name="email" value="{{$config->email}}" class="form-control" placeholder="admin@domain.com" aria-describedby="basic-addon1">
                            </div><br>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Tel</span>
                                <input type="text" name="tel" value="{{ $config->tel }}" class="form-control" placeholder="+46 176 129 00," aria-describedby="basic-addon1">
                            </div><br>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Facebook</span>
                                <input type="text" name="facebook" value="{{ $config->facebook }}" class="form-control" placeholder="Wandee Srepenrak" aria-describedby="basic-addon1">
                            </div><br>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Keyword</span>
                                <input type="text" name="keyword" value="{{ $config->keyword }}" class="form-control" placeholder="Restaurant" aria-describedby="basic-addon1">
                            </div><br>
                            <div class="btn-group">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
