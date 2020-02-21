@extends('common.master')

@section('content')
    <section class="hero  is-medium  is-bold is-primary">
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">Welcome to Hogwarts</p>
                <p class="subtitle is-3">Issued by the Ministery of Magic</p>

            </div>
        </div>
    </section>

    <section class="hero  is-medium  is-light">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-multiline is-centered">

                    <div class="column is-3 has-text-centered">
                        <figure class="image is-128x128">
                            <img src="/img/Gryffindor_ClearBG.png">
                        </figure>
                        <p class="title is-5">Gryffindor</p>
                        <p class="subtitle is-5">245 points</p>
                    </div>

                    <div class="column is-3 has-text-centered">
                        <figure class="image is-128x128">
                            <img src="/img/Hufflepuff_ClearBG.png">
                        </figure>
                        <p class="title is-5">Hufflepuff</p>
                        <p class="subtitle is-5">92 points</p>
                    </div>

                    <div class="column is-3 has-text-centered">
                        <figure class="image is-128x128">
                            <img src="/img/Slytherin_ClearBG.png">
                        </figure>
                        <p class="title is-5">Slytherin</p>
                        <p class="subtitle is-5">291 points</p>
                    </div>

                    <div class="column is-3 has-text-centered">
                        <figure class="image is-128x128">
                            <img src="/img/Ravenclaw_ClearBG.png">
                        </figure>
                        <p class="title is-5">Ravenclaw</p>
                        <p class="subtitle is-5">302 points</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">

                <div class="column is-8">

                    <div class="content">
                        <h1>Welcome</h1>
                        <p>
                            Welcome to Hogwarts School of Witchcraft & Wizardry. The feast is about to begin in
                            the Great Hall where the Sorting Ceremony will take place. Please wait here in the Entrance
                            Hall while I announce you...
                        </p>
                        <h1>Latest News</h1>
                        @foreach($latestPosts as $post)
                            <div class="card">

                                <div class="card-image">
                                    <img src="{{$post->img_url}}" alt="Post picture">
                                </div>

                                <div class="card-content">
                                    <div class="content">

                                        <a class="title is-4" href="/posts/{{$post->id}}">{{$post->title}}</a>

                                        <p>{{$post->excerpt}}</p>
                                    </div>
                                    <div class="has-text-centered">
                                        <a href="/posts/{{$post->id}}" class="button is-primary">Read more</a>
                                    </div>
                                </div>
                                <footer class="card-footer">
                                    <p class="card-footer-item">Published: {{ $post->published_at }}</p>
                                </footer>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="column is-4-desktop is-12-tablet">
                    <p class="title is-4">Absent Teachers</p>

                    <div class="columns is-multiline">

                        <div class="column is-12">
                            @foreach ($absentTeachers as $teacher)
                                <div class="card">
                                    <div class="card-content">
                                        <div class="content">
                                            <a class="title is-4" href="#">{{ $teacher->name }}</a>
                                            <i>({{ $teacher->subject_position }})</i>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
