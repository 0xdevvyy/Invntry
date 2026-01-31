@props([
    'name' => 'required'
])
@error($name)
<p class="text-red-400 text-small text-bold">{{$message}}</p> 
@enderror