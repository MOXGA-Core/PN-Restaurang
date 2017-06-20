@extends('frontend.layouts.app')

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
                    @foreach ($products as $product)
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-6 col-md-3">
                                    <img src="{{ url($product->path) }}" style="width: 128px; height: 128px" alt="...">

                                </div>
                                <p><b>{{ $product->name }}</b></p>
                                <p> {{ $product->detail }}</p>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-warning">Edit</button>
                                </div>
                                <form id="form{{ $product->id }}" action="{{ url('/admin/product/'.$product->id) }}" method="post" style="display: none;">
                                    {{ method_field('delete') }}
                                    {{ csrf_field() }}
                                </form>
                                <div class="btn-group">
                                    <button type="button"  onclick="if(confirm('Do you want to delete this product?')){event.preventDefault();
                                            document.getElementById('form{{ $product->id }}').submit();} else { return true} " class="btn btn-danger">Del</button>
                                </div>

                                <b>( {{ $product->category }} ) </b> {{ $product->updated_at }}
                            </div>

                        </div>
                        <hr>
                    @endforeach
                    <div align="center"> {{ $products->links() }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
