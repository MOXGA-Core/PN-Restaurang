@if(session()->has('alert'))
    <div class="alert alert-{{ session()->get('alert') }}">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        Saved !
    </div>
@endif