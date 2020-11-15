@extends('layouts.app')

@section('content')
      <div class="ui three stackable doubling cards container">
        @foreach($items as $item)
        <div class="ui card" href="/examples/theming.html">
          <div class="content">
            <div class="ui buttons">
              <a class="ui fluid button" href="{{ $item->link }}" target="_blank" style="background: {{ $item->color }};">Open link</a>
              <div class="or"></div>
              <a href="{{ route('items.edit', $item->id) }}" class="ui primary button">Edit</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
@endsection
