@foreach (['info', 'danger', 'success'] as $msg)
    @if (Session::has($msg))
        <div class="alert alert-{{ $msg }}">
            <button class="close" data-dismiss="alert" type="button" aria-hidden="true">
                x
            </button>
            {{ Session::get($msg) }}
        </div>
    @endif
@endforeach