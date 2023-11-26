@php
     $infos = ["a","b","c","d"]; 
    // $msg = "Hello World";
@endphp
@include('header',['info'=> $infos])

<br>
{{"Welcome"}}
<br>
@php
     $msg = ["abc","def","ert","tyu"]; 
    // $msg = "Hello World";
@endphp

<ul>
{{-- @foreach ($msg as $i)
    <li>{{$i}}</li>
@endforeach --}}

@forelse ($msg as $i)
    @if ($loop->odd)
        <p style="color:blue">{{$loop->iteration}} - {{$i}}</p>
    @else
        <p style="color:red">{{$loop->iteration}} - {{$i}}</p>
    @endif
    
@empty
    <p>No data found</p>
@endforelse

</ul>
{{-- {{$msg}} --}}

{!!"<h1>Welcome</h1>"!!}

{{-- {!!"<script>alert('Welcome')</script>"!!} --}}

<br>
@includeIf('content')

@includeWhen(empty($infos),'footer')










