<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    @include('backend.layouts.head')

    <body>
        <div id="app">
            @include('backend.layouts.navbar')

            @yield('content')
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        <script type="text/javascript" src="{!! asset('assets/DataTables/datatables.min.js') !!}"></script>

        <script>
            $(function() {
                $('select[data-value]').not('[data-value=""]').each(function(index, e) {
                    var value = $(e).data('value');
                    $(e).val(value);
                });

                @if(Auth::check())
                    $('li[data-page="{{ explode('.', \Route::currentRouteName())[1] }}"]').addClass('active');
                @endif
            });
        </script>

        @stack('javascript')
    </body>
</html>
