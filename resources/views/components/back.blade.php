<!-- @props(['jeu'])
@props(['categorie'])
@props(['tag'])

@if (isset($jeu))
<a href="{{route('jeux.index', $jeu->id)}}">
    <div class="retour w-18">{{$slot}}</div>
</a>
@endif

@if (isset($categorie))
<a href="{{route('categories.index', $categorie->id)}}">
    <div class="retour w-18">{{$slot}}</div>
</a>
@endif

@if (isset($tag))
<a href="{{route('tags.index', $tag->id)}}">
    <div class="retour w-18">{{$slot}}</div>
</a>
@endif -->
