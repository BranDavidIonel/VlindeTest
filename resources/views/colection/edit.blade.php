@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update') }}</div>

                <div class="card-body">
                <form method="POST" action="{{url('colection/update/' .$colection->id)}}">
                    @csrf
                    <strong>Title</strong>
                    <input type="text" name="title" class="form-control " value="{{$colection->title}}" required/> 
                    @if ($errors->has('title'))
                    <p class="help is-danger">{{$errors->first('title')}} </p>
                    @endif
                    
                    <strong>Description </strong>
                    <textarea type="text" name="description" class="form-control " placeholder="details" style="height:150px" value="{{$colection->description}}"> 
                    </textarea>
                    
                    <strong>Color </strong>
                    <input type="text" name="color" class="form-control" value="{{$colection->color}}"/>
                    <strong>Link </strong>
                    <input type="text" name="link" class="form-control" value="{{$colection->link}}"/>  
                    <br>
                    <div >
                    <div class="row">
                    <strong>Old Type:</strong>
                        
                        <label>{{$colection->type}} <label> 
                        
                    </div>
                    <strong> New Type</strong> 
                    <br>
                    <select
                    name="type"  required>
                    @foreach($types as $type)
                        <option value="{{ $type}}">{{$type}} </option>
                    @endforeach
                    </select>
                    <div>
                    @error('type')
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