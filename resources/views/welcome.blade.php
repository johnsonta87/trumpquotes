@extends('layout')

@section('content')
<section id="app" class="wrapper">
    <div class="container">
      <div class="rand-quote-item quote">
        <h3><?php
          $quoteOutput = json_decode($quote, true);
          echo '"' . $quoteOutput['message'] . '"';
        ?></h3>
      </div>
      <form action="{{ action('RandomQuoteController@show') }}" method="post">
        <h4>I have a word about you as well!</h4>
        {{ csrf_field() }}
        <input class="styled-input" type="text" name="name" placeholder="Enter your name"/>

        <input class="styled-submit" type="submit" value="Submit" />
      </form>
    </div>
  </section>

@endsection
