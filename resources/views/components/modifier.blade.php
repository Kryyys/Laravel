@props(['jeu'])
@props(['categorie'])
@props(['tag'])

@if (isset($jeu))
    <a href="{{route('jeux.edit', $jeu->id)}}">
    <div class="modifier w-20">{{$slot}}</div>
</a>
@endif

@if (isset($categorie))
    <a href="{{route('categories.edit', $categorie->id)}}">
    <div class="modifier w-20">{{$slot}}</div>
</a>
@endif

@if (isset($tag))
    <a href="{{route('tags.edit', $tag->id)}}">
    <div class="modifier w-20">{{$slot}}</div>
</a>
@endif


