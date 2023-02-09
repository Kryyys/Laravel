<!-- @props(['jeu'])
@props(['categorie'])
@props(['tag'])

@if (isset($jeu))
    <a href="{{route('jeux.create')}}">
    <div class="creer w-16">{{$slot}}</div>
</a>
@endif

@if (isset($categorie))
    <a href="{{route('categories.create')}}">
    <div class="creer w-16">{{$slot}}</div>
</a>
@endif

@if (isset($tag))
    <a href="{{route('tags.create'}}">
    <div class="creer w-16">{{$slot}}</div>
</a>
@endif
 -->
