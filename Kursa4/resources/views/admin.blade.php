@extends ('layout')
@section('table')
    {{--    @if(count($clients))--}}
    {{--        <table>--}}
    {{--            <tr>--}}
    {{--                <th>Назва</th>--}}
    {{--            </tr>--}}
    {{--            @foreach($clients as $client)--}}
    {{--                <tr>--}}
    {{--                    <td>{{ $client->name }}</td>--}}
    {{--                </tr>--}}
    {{--            @endforeach--}}
    {{--            @endif--}}
    {{--        </table>--}}
    <a href="admin/clients/" class="button">Клієнти</a>
    <a href="admin/orders/" class="button">Замовлення</a>
    <a href="admin/drivers/" class="button">Водії</a>

@endsection
@section('add')
    <a href="/" class="button" style="background: #e06565; width: 200px">На головну</a>
@endsection
