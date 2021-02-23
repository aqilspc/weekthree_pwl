@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Our Neews</div>

                <div class="card-body">
                    <table>
                        <thead>
                            <th>No</th>
                            <th>News Name</th>
                        </thead>
                        <tbody>
                            @for($i=0 ; $i<10; $i++)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$news_name}} - {{$i+1}}</td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
