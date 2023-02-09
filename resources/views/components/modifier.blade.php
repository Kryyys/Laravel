@props(['jeu'])

<a href="{{route('jeux.edit', $jeu->id)}}">
    <div class="modifier w-20">{{$slot}}</div>

</a>
