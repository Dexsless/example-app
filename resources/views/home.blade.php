<style>
    .card {
        border: 1px solid black;
        border-radius: 5px;
        background-color: darkgrey;
        font-family:'Courier New', Courier, monospace;
    }
</style>
<div class="card">
    <h1 align="center">Hello world</h1>
    {{$name}}
    <ul>
        @foreach ($karakter as $value)
            <li>{{$value}}</li>
        @endforeach
    </ul>
</div>