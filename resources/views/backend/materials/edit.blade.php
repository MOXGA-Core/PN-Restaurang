<div id="edit-panel" class="panel panel-primary" style="display: none">
    <div class="panel-heading">
        <h4>Edit: {{ $material->name }}</h4>
    </div>

    <div class="panel-body">
        @include('components.validation')

        {!! Form::open(['route' => ['backend.materials.update', $material->id], 'id' => 'edit-form', 'files' => true, 'method' => 'PUT']) !!}
        <input type="hidden" name="oldIconImage" value="{{ $material->iconImage }}">
        <div class="form-group text-center">
            {!! $material->renderIcon() !!}
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">Image</span>
                <input type="file" id="iconImage" name="iconImage" class="form-control" accept="image/*">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">Name</span>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $material->name) }}">
            </div>
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok-circle"></span> Save !</button>
            <button type="button" class="btn btn-danger cancel-btn"><span class="glyphicon glyphicon-ban-circle"></span> Cancel</button>
        </div>
        {!! Form::close() !!}
    </div>
</div>