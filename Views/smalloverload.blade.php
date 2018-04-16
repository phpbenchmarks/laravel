<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            table {
                border: solid 1px black;
                border-collapse: collapse;
            }
            table th {
                background-color: #969896;
                color: white;
            }
            table td, table th {
                border: solid 1px black;
                min-width: 150px;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Hour</th>
                    @for($day = 1; $day <=31; $day++)
                        <th>Day {{ $day }}</th>
                    @endfor
                </tr>
            </thead>
            <tbody>
                @php($smallOverloadIndex = 0)
                @for($hour = 0; $hour <= 23; $hour++)
                    <tr>
                        <td>{{ $hour }}</td>
                        @for($day = 1; $day <= 31; $day++)
                            @php($smallOverloadIndex++)
                            <td>
                                {{ trans('SmallOverload::smallOverload.translation', ['index' => $smallOverloadIndex]) }}
                                <br>
                                <strong>#{{ $smallOverloads[$smallOverloadIndex - 1]->getId()  }}</strong>
                                <br>
                                {{ $smallOverloads[$smallOverloadIndex - 1]->getDate() }}
                                <br>
                                {{ $smallOverloads[$smallOverloadIndex - 1]->getDateTime() }}
                                <br>
                                {{ $smallOverloads[$smallOverloadIndex - 1]->getFixedString() }}
                                <br>
                                {{ $smallOverloads[$smallOverloadIndex - 1]->getVariableString() }}
                            </td>
                        @endfor
                    </tr>
                @endfor
            </tbody>
        </table>
    </body>
</html>


{{--<h1>--}}
	{{--Hello Overload !--}}
{{--</h1>--}}
{{--<table>--}}
	{{--@foreach($smallOverloads as $index => $overload)--}}
		{{--<tr>--}}
			{{--<td>{{ $overload->date }}</td>--}}
			{{--<td>{{ $overload->dateTime }}</td>--}}
			{{--<td>{{ $overload->fixedString }}</td>--}}
			{{--<td>{{ $overload->variableString }}</td>--}}
			{{--<td>{{ trans('overload::smallOverload.translation1', ['index' => $index] )}}</td>--}}
		{{--</tr>--}}
	{{--@endforeach--}}
{{--</table>--}}
