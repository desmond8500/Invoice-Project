
@auth()

    @php
        $me = Auth::user();
        // if ($me->avatar = '0') {
            $me->avatar = 'adminlte/img/user2-160x160.jpg';
        // }
    @endphp

    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset("$me->avatar") }}" class="img-circle elevation-2" alt="{{ asset($me->avatar) }}">

        </div>
        <div class="info">
            <a href="#" class="d-block">{{ $me->name }}</a>
        </div>
    </div>
@endauth


