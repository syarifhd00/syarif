<a href="{{url('/')}}">Home</a>
<form action="{{url('/1')}}" method="GET">
<input type="number" name="val" value="{{$number}}" placeholder="Number">
<button type="submit">Cek</button>
</form>
{{$data}}