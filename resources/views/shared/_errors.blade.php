@if (count($errors) > 0)
 <div class="bg-pink-200 px-12" >
 <ul class="list-disc">
 @foreach($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
@endif
