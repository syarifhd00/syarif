<a href="{{url('/')}}">Home</a>
<form action="{{url('/4')}}" method="GET">
<input type="number" name="number" value="{{$array}}" placeholder="Kumpulan Angka">
<input type="number" name="val" value="{{$remove}}" placeholder="Target yang dihapus">
<button type="submit">Cek</button>

</form>
{{$result}}