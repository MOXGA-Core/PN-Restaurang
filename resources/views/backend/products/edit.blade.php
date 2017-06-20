<div id="edit-panel" class="panel panel-primary" style="display: none">
    <div class="panel-heading">
        <h4>Edit: {{ $product->name }}</h4>
    </div>

    <div class="panel-body">
        @include('components.validation')

        {!! Form::open(['route' => ['backend.products.update', $product->id], 'files' => true, 'id' => 'edit-form']) !!}
        <input type="hidden" name="oldProfileImage" value="{{ $product->profileImage }}">
        <div class="form-group text-center">
            <img src="{{ asset($product->profileImage) }}" alt="" class="img-responsive">
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">Image</span>
                <input type="file" id="profileImage" name="profileImage" class="form-control" accept="image/*">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">Name</span>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $product->name) }}">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">Course</span>
                <select name="course_id" id="courses" class="form-control" data-value="{{ old('course_id', $product->course_id) }}">
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}"{!! $product->course_id == $course->id ? ' checked="checked'  : ''!!}>{{ $course->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Type</span>
                <select name="type_id" class="form-control" id="type_id" data-value="{{ old('type_id', $product->type_id) }}">
                    @foreach($types as $type)
                        <option value="{{ $type->id }}"{!! $product->type_id == $type->id ? ' selected="selected"' : '' !!}>{{ $type->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Detail</span>
                <textarea id="detail" name="detail" class="form-control">
                    {{ old('detail', $product->detail) }}
                </textarea>
            </div>
        </div>

        <div class="page-header">
            <div class="pull-right">
                <button type="button" class="btn btn-primary btn-xs add-btn"><span class="glyphicon glyphicon-plus"></span> Add</button>
            </div>
            <h5>Price</h5>
        </div>

        <div class="prices">
            @foreach($product->prices as $price)
                <div class="price-item form-group">
                    <div class="row">
                        <div class="col-md-5">
                            <select name="material_id[]" class="form-control" data-value="{{ $price->material_id }}">
                                @foreach($materials as $material)
                                    <option value="{{ $material->id }}"{!! $price->material_id == $material->id ? ' selected="selected"' : '' !!}>{{ $material->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-5">
                            <div class="input-group">
                                <input type="number" id="price_0" name="price[]" step="0.01" class="form-control" placeholder="0.00" value="{{ $price->price }}">
                                <span class="input-group-addon" id="basic-addon1">Kr</span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-danger btn-xs remove-btn"><span class="glyphicon glyphicon-remove"></span></button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok-circle"></span> Save !</button>
            <button type="button" class="btn btn-danger cancel-btn"><span class="glyphicon glyphicon-ban-circle"></span> Cancel</button>
        </div>
        {!! Form::close() !!}
    </div>
</div>