@foreach (['danger', 'warning', 'success', 'info'] as $msg)
 @if(session()->has($msg))
 <div class="bg-green-200 rounded-lg">
 <p class=" {{ $msg }}">
 {{ session()->get($msg) }}
 </p>
 </div>
 @endif
@endforeach