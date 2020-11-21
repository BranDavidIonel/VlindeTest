@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create') }}</div>

                <div class="card-body">
                <form method="POST" action="{{route('colection.store')}}">
                    @csrf
                    <strong>Title</strong>
                    <input type="text" name="title" class="form-control {{$errors->has('title') ? 'background-danger': ''}}" required/> 
                    @if ($errors->has('title'))
                    <p class="help is-danger">{{$errors->first('title')}} </p>
                    @endif
                    
                    <strong>Description </strong>
                    <textarea type="text" name="description" class="form-control {{$errors->has('body') ? 'is-danger': ''}}" placeholder="details" style="height:150px" required> 
                    </textarea>
                    @if ($errors->has('description'))
                    <p class=" background-danger bg-danger" >{{$errors->first('description')}} </p>
                    @endif
                    <strong>Color </strong>
                    <input type="text" name="color" class="form-control"/>
                    <strong>Link </strong>
                    <input type="text" name="link" class="form-control"/>  
                    <br>
                    <div >
                    <strong> Type</strong> 
                    
                    <select
                    name="type"  required>
                    @foreach($types as $type)
                        <option value="{{ $type}}">{{$type}} </option>
                    @endforeach
                    </select>
                    <div>
                    @error('tags')
                        <p> {{$message}} </p>
                    @enderror
                    </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit </button>


                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection