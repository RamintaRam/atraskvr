@extends('front-end.main')

@section('content')

    <div class="container">
        <table class="table">

            <thead>
            <tr>
                <th>key</th>
                <th>value</th>
            </tr>

            </thead>
            <tbody>

            @foreach($record as $key => $value)
                <tr>
                    <td>{{$key}}</td>
                    <td>{{$value}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>

        <a class="btn btn-sm btn-primary" href="{{route('front-end.' . $tableName . '.index')}}">Back</a>
        <a class="btn btn-success btn-sm" href="{{route('front-end.' . $tableName . '.edit', $record['id'])}}">Edit</a>
        <a onclick="deleteItem('{{route('front-end.' . $tableName . '.delete', $record['id'])}}')" class="btn btn-danger btn-sm" href="{{route('front-end.' . $tableName . '.index')}}">Delete</a>

    </div>

@endsection

@section('script')
    <script>



        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function deleteItem(route) {




            $.ajax({

                url: route,
                type: 'DELETE',
                data: {},
                dataType: 'json',
                success: function () {
                    alert('DELETED')

                },
                error: function () {
                    alert('Error');
                }

            });

        }

    </script>
@endsection