@extends('layouts.app')

@section('page-title', 'DC Comics')

@section('main-content')
    <main>
        <section id="jumbotron">
            <div>
                Current series
            </div>
        </section>
        <section>
            <div class="container card">
                @foreach ($comics as $item)
                    <article>
                        <img src="{{ $item["thumb"] }}" :alt="">
                        <h4>
                            {{ $item["series"] }}
                        </h4>
                    </article>
                @endforeach

            </div>
            <div id="load">
                <button>
                Load more
                </button>
            </div>
        </section>
    </main>
@endsection
