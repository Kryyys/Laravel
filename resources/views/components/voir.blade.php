@props(['jeu'])

<a href="{{route('jeux.show', $jeu->id)}}">
    <div class="voir w-14">{{$slot}}</div>

</a>
