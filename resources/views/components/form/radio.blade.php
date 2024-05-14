@props(['name', 'id', 'post'])

    <input 
    type="radio" 
    id="{{ $id }}"
    name="{{ $name }}"
    value="{{ $id }}" 
    @if($id == $post->status) checked @endif

    > {{ ucwords($id) }} </input>
    