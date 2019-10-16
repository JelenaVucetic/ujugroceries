@extends('layouts.master')

@section('content')   
    <div class="container" style="margin-top:200px;">
            <h2>Novi Proizvod</h2>
            <form class="form-horizontal" method="POST" action="/products">
                    @csrf
                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Ime proizvoda:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" placeholder="Unesite ime proizvoda" name="name" required value="{{ old('title') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="description">Opis proizvoda:</label>
                    <textarea class="form-control" rows="5" id="comment" required>{{ old('description') }}</textarea>
                </div>

              <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Submit</button>
                </div>
              </div>
            </form>
          </div>
@endsection
