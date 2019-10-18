@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div style="font-size: 25px"><strong>List Free Song</strong></div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Singer</th>
                        <th scope="col">Author</th>
                        <th scope="col">Link</th>
                        <th scope="col">Thumbnail</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listsong as $item)
                        <tr>
                            <td>{{$item['id']}}</td>
                            <td>{{$item['name']}}</td>
                            <td>{{$item['singer']}}</td>
                            <td>{{$item['author']}}</td>
                            <td>{{$item['link']}}</td>
                            <td><img width="70px" src="{{$item['thumbnail']}}" alt=""></td>
                            <td><a ><button class="btn btn-primary">Edit</button></a></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
