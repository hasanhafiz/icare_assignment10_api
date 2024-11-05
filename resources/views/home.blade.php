<form action="{{ route('delete.orderno') }}" method="POST">
@csrf
@method('DELETE')

<h4>Ban Delete Method Example</h4>
<label for="id">Enter Id</label>
<input type="text" name="id">
<br>
<label for="id">Enter Order No</label>
<input type="text" name="order_no"> <br>
<input type="submit">

</form>