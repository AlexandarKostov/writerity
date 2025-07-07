@props(['author'])
<img class="w-8 h-8 rounded-full mr-3 object-cover"
     src="{{ $author->profile_photo_url }}"
     alt="{{ $author->name }}">
<span class="mr-1 text-xs">{{ $author->name }}</span>
