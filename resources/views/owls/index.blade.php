@extends('common.master')

@section('content')
    <section class="hero  is-medium  is-bold is-primary">
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">Owls</p>
                <p class="subtitle is-3">List of our Owls</p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12">
                    <div class="content">
                        <table class="table is-fullwidth">
                            <thead>
                            <tr>
                                <th style="width: 5%">ID</th>
                                <th style="width: 20%">Name</th>
                                <th style="width: 20%">Teacher ID</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($owls as $owl)
                                <tr>
                                    <td>{{ $owl->id }}</td>
                                    <td>{{ $owl->name }}</td>
                                    <td>{{ $owl->teacher_id }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
