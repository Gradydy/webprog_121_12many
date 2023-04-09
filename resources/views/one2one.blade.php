@extends('layouts.main')

@section('test')
<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <h5 class="text-center my-4">Laravel Eloquent Relationship : One To Many</h5>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Judul Buku</th>
                        <th>Review Buku</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Artikel as $artikel)
                        <tr>
                            <td>{{$artikel->title}}</td>
                            <td>
                                @foreach($artikel->body()->get() as $body)
                                    <div class="card shadow-sm mb-2">
                                        <div class="card-body">
                                            <i class="fa fa-comments"></i> {{ $body->body }}
                                        </div>
                                    </div>
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
