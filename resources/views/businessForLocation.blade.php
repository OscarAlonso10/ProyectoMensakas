<h1>Select a Business</h1>
  <select name="idBusiness">
    @foreach($businesses as $business)
      <option value="{{$business->idBusiness}}"> {{ $business->name }} </option>
    @endforeach
</select>