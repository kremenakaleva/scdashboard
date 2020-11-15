@extends('layouts.app')

@section('content')

      <div class="ui container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Error!</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('items.update', $item->id) }}" method="POST" class="ui form">
          @csrf
          @method('PUT')
          <input type="hidden" name="id" value="{{$item->id}}">
            <div class="field">
              <label>Color</label>
              <input type="text" name="color" placeholder="Color" value="{{$item->color}}" class="colorpicker">
              <script>
                  $('.colorpicker').colorpicker();
              </script>
            <div class="field">
              <label>Link</label>
              <input type="text" name="link" placeholder="https://" value="{{$item->link}}">
            </div>
          </div>
          <button class="ui button" type="submit">Save</button>
        </form>
      </div>

@endsection
