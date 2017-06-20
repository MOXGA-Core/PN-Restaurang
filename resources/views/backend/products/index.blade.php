@extends('backend.layouts.app')

@push('stylesheet')
<style>
    .prices > .price-item:first-child .remove-btn {
        display: none;
    }
</style>
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @include('components.alert')
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Products</h4>
                    </div>

                    <div class="panel-body">
                        {!! $html->table(['class' => 'table table-bordered']) !!}
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

                        {!! Form::open(['route' => 'backend.products.store', 'files' => true]) !!}
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Image</span>
                                    <input type="file" id="profileImage" name="profileImage" class="form-control" accept="image/*">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Name</span>
                                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Course</span>
                                    <select name="course_id" id="courses" class="form-control" data-value="{{ old('course_id') }}">
                                        @foreach($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Type</span>
                                    <select name="type_id" class="form-control" id="type_id" data-value="{{ old('type_id') }}">
                                        @foreach($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Detail</span>
                                    <textarea id="detail" name="detail" class="form-control">{{ old('detail') }}</textarea>
                                </div>
                            </div>

                            <div class="page-header">
                                <div class="pull-right">
                                    <button type="button" class="btn btn-primary btn-xs add-btn"><span class="glyphicon glyphicon-plus"></span> Add</button>
                                </div>
                                <h5>Price</h5>
                            </div>

                            <div class="prices">
                                @if(old('price'))
                                    @foreach(old('price') as $i => $price)
                                        <div class="price-item form-group">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <select name="material_id[]" class="form-control" data-value="{{ old('material_id')[$i] }}">
                                                        @foreach($materials as $material)
                                                            <option value="{{ $material->id }}">{{ $material->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <input type="number" id="price_0" name="price[]" step="0.01" class="form-control" placeholder="0.00" value="{{ $price }}">
                                                        <span class="input-group-addon" id="basic-addon1">Kr</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-danger btn-xs remove-btn"><span class="glyphicon glyphicon-remove"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="price-item form-group">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <select name="material_id[]" class="form-control">
                                                    @foreach($materials as $material)
                                                        <option value="{{ $material->id }}">{{ $material->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <input type="number" id="price_0" name="price[]" step="0.01" class="form-control" placeholder="0.00">
                                                    <span class="input-group-addon" id="basic-addon1">Kr</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <button type="button" class="btn btn-danger btn-xs remove-btn"><span class="glyphicon glyphicon-remove"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                @endif
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
                {!! Form::open(['route' => 'backend.products.index', 'method' => 'DELETE']) !!}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title">Confirm to delete this product ? (Product ID: <span class="product-id"></span>)</h3>
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
{!! $html->scripts() !!}

<script>
    $(function() {
        var maxPrice = {{ $materials->count() }};

        $('#dataTableBuilder').on( 'init.dt', function () {
            bindEditBtn();
            bindAddBtn();
            bindDeleteBtn();
        });

        var bindDeleteBtn = function() {
            $('.delete-btn').click(function() {
                var $modal = $('#deleteModal');
                var url = $modal.find('form').attr('action');
                var id = $(this).data('id');

                $modal.find('form').attr('action', url + '/' + id);
                $modal.find('.product-id').html(id);
                $modal.modal('show');
            });
        };

        var checkAddBtnStatus = function() {
            var prices = $('.prices');
            prices.each(function(index, elem) {
                if($(elem).find('.price-item').length >= maxPrice) {
                    $(elem).parent().find('.add-btn').attr('disabled', true);
                }
            });
        };

        var bindEditForm = function() {
            $('#edit-form').submit(function(e) {
                e.preventDefault();
                var $form = $(this);

               $.ajax({
                   url: $form.attr('action'),
                   method: "PUT",
                   data: $form.serialize(),
                   success: function(response) {
                       $form.find('.alert').remove();
                       if(response == 'success') {
                           $('#edit-form > .form-group:last-child').prepend('<div class="alert alert-success" style="display: none"><span class="glyphicon glyphicon-ok"></span> Success</div>').find('.alert').slideDown();
                       }
                   },
                   error: function(xhr, status, error) {
                       var errors = $.parseJSON(xhr.responseText);
                       $form.find('.alert').remove();
                       $form.find('.help-block').remove();
                       $form.find('.has-error').removeClass('has-error');

                       $.each(errors, function(name, error) {
                          $form.find('[name="' + name + '"]').focus().parents('.form-group').addClass('has-error').append('<span class="help-block">' + error + '</span>');
                       });
                   }
               });
            });
        };

        var bindAddBtn = function() {
            checkAddBtnStatus();

            $('.add-btn').unbind().click(function() {
                var root = $(this).parents('.panel-body');
                var clone = root.find('.price-item:first-child').clone();

                clone.hide().appendTo(root.find('.prices')).slideDown();
                bindRemoveBtn();
                checkAddBtnStatus();
            });
        };

        var bindRemoveBtn = function() {
            $('.remove-btn').unbind().click(function() {
                $(this).parents('.price-item').slideUp(function() {
                    $(this).remove();
                });
                $(this).parents('.panel-body').find('.add-btn').removeAttr('disabled');
            });
        };

        var bindEditBtn = function() {
            $('.edit-btn').click(function() {
                var id = $(this).data('id');
                $('#edit-panel').remove();

                $.ajax({
                    method: "GET",
                    url: "{{ route('backend.products.index') }}/" + id,
                    success: function(html) {
                        $('#add-panel').hide().parent().prepend(html);
                        $('#edit-panel').slideDown();
                        bindEditForm();

                        bindCancelBtn();
                        bindAddBtn();
                        bindRemoveBtn();
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
    });
</script>
@endpush
