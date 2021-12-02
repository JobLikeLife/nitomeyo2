<!--全局通用局部视图-->
<a href="{{ route('users.show', $user->id) }}">
 <img src="{{ $user->cravatar('140') }}" alt="{{ $user->name }}" class="gravatar"/>
</a>
<h1>{{ $user->name }}</h1><br>