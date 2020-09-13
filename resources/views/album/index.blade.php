<h1>TITOLO  {{$album->title}}</h1>
<h2>ARTISTA {{$album->artist}}</h2>



<h2>ELENCO BRANI</h2>
<ul>
  @foreach ($album->songs as $song)
  <li>{{song->title}}</li>
</ul>
