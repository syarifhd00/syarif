<a href="{{url('/')}}">Home</a>
<form action="{{url('/3')}}" method="GET">
Array = [“red”, “blue”, “yellow”, “black”, “grey”]<br>
<input type="text" name="val" value="{{$number}}" placeholder="Colour">
<button type="submit">Cek</button>
</form>
{{$data}}