@extends('frontend.layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Save Product

                    </div>

                    <div class="panel-body">
                        <div align="center" class="row" style="width: 80%; margin-left: 20px">
                            <form method="post" action="{{ url('/admin/product') }}/{{ $productone->id }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field("PUT") }}
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Name</span>
                                    <input type="text" name="name" value="{{ $productone->name }}" class="form-control" placeholder="Name"
                                           aria-describedby="basic-addon1">
                                </div>
                                <br>

                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Category</span>
                                    <select name="category" class="form-control">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->category }}" <?php if($productone->category == $category->category) echo 'select';?>>{{ $category->category }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <br>
                                @foreach($prices as $key => $price)
                                    <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">{{ $key }}</span>
                                    <input type="number" name="prices[{{ $key }}]" value="{{ $price }}" class="form-control" >
                                </div>
                                <br>
                                @endforeach
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Tag</span>
                                    <input type="text" name="tag" class="form-control" value="{{ $productone->tag }}" placeholder="pomotion,"
                                           aria-describedby="basic-addon1">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Detail</span>
                                    <input type="text" name="detail" class="form-control" value="{{ $productone->detail }}"  placeholder="Detail"
                                           aria-describedby="basic-addon1">
                                </div>
                                <br>

                                <div class="btn-group">
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                                <div class="btn-group">
                                    <a type="button" href="{{ url('/admin/home') }}" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
