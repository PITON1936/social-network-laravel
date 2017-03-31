@extends('layouts.master')

@section('content')
    @include('includes.message-block')
    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What do you have to say?</h3></header>
            <form action="{{ route('post.create') }}" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="body" id="new-post" rows="5" placeholder=""></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
                <input type="hidden" value="{{Session::token()}}" name="_token">
            </form>
        </div>
    </section>
    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What other people say...</h3></header>
            <article class="post">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolores est maiores nihil porro, possimus quaerat, quas repellat rerum saepe suscipit vitae! Ad atque deleniti explicabo, molestias nulla odio sint.</p>
                <div class="info">
                    Posted by Vova on 31 March 2016
                </div>
                <div class="interaction">
                    <a href="#">Like</a>
                    <a href="#">Dislike</a>
                    <a href="#">Edit</a>
                    <a href="#">Delete</a>
                </div>
            </article>
            <article class="post">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolores est maiores nihil porro, possimus quaerat, quas repellat rerum saepe suscipit vitae! Ad atque deleniti explicabo, molestias nulla odio sint.</p>
                <div class="info">
                    Posted by Vova on 31 March 2016
                </div>
                <div class="interaction">
                    <a href="#">Like</a>
                    <a href="#">Dislike</a>
                    <a href="#">Edit</a>
                    <a href="#">Delete</a>
                </div>
            </article>
        </div>
    </section>
@endsection