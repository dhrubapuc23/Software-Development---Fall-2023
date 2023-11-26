<h1>Header section</h1>
<h2>Array elements</h2>
<ul>
    @forelse ($info as $i)
        <p>{{$loop->iteration}} - {{$i}}</p>
    @empty
        <p>No data found</p>
    @endforelse

</ul>