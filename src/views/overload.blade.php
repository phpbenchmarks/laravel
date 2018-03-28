<h1>
	Hello Overload !
</h1>
<table>
	@foreach($overloads as $index => $overload)
		<tr>
			<td>{{ $overload->date }}</td>
			<td>{{ $overload->dateTime }}</td>
			<td>{{ $overload->fixedString }}</td>
			<td>{{ $overload->variableString }}</td>
			<td>{{ trans('overload::smallOverload.translation1', ['index' => $index] )}}</td>
		</tr>
	@endforeach
</table>
<h3>{{ $errors }}</h3>