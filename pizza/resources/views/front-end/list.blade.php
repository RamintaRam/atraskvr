@extends('front-end.main')

@section('content')

    <div class="container">
        @if(isset($error))
            <div class="alert alert-danger">
                <strong>{{ $error['message'] }}</strong>
            </div>
        @endif
        @if(!isset($error))
            <table class="table">
                <thead>
                <tr>
                    @foreach($list[0] as $key => $value)
                        <th>{{$key}}</th>
                    @endforeach
                    <th>View</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                @foreach($list as $key => $record)
                    <tr>
                        @foreach($record as $key => $value)
                            <td>{{$value}}</td>

                        @endforeach
                        <td><a class="btn btn-primary btn-sm" href="{{route('front-end.' . $tableName . '.show', $record['id'])}}">View</a></td>
                        <td><a class="btn btn-success btn-sm" href="{{route('front-end.' . $tableName . '.edit', $record['id'])}}">Edit</a></td>
                        <td><a id="del" onclick="deleteItem('{{route('front-end.' . $tableName . '.delete', $record['id'])}}')" class="btn btn-danger btn-sm" >Delete</a></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        @endif
        <a style="margin-bottom: 50px" class="btn btn-primary btn-sm" href="{{ route('front-end.' . $tableName . '.create') }}">Create new {{substr($tableName, 0, -1)}}</a>
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
                    $("#del").parent().parent().remove();

                },
                error: function () {
                    alert('error');
                }

            });

        }

    </script>
@endsection