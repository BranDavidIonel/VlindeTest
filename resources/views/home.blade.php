@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <div class="row">
                        <a class="btn btn-primary" href="{{URL:: to('colection/create')}}">Add </a>
                    </div>
                    <div class="row card">
                        <h2> All colection : </h2>
                        <table class="table table-bordered">
                        <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Link</th>
                        <th>Color</th>
                        <th>Type</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Show</th>
                        </tr>
                        @forelse($my_colection as $line)
                        <tr>
                        <td>
                        @if($line->type==1)
                        <img src="{{URL:: to('media\icons\book.png')}}" width="20px"/>
                        @endif
                        @if($line->type==2)
                        <img src="{{URL:: to('media\icons\music.svg')}}" width="20px"/>
                        @endif   
                        @if($line->type==3)
                        <img src="{{URL:: to('media\icons\move.svg')}}" width="20px"/>
                        @endif
                       
                            
                        
                        {{ $line->title }}</td>
                        <td>{{ $line->description }}</td>
                        <td><a href="{{URL:: to( $line->link )}}">Link </a></td>
                        <td>{{ $line->color }}</td>
                        <td>{{ $line->getType() }}</td>
                        <td>
                        <a class ="btn btn-primary" href="{{URL:: to('colection/edit/'.$line->id)}}">Edit </a>
                        </td>
                        <td>
                        <a class ="btn btn-danger" href="{{URL::to('colection/delete/'.$line->id)}}" onclick="return confirm ('Are you sure?')">Delete </a>
                        </td>
                        <td><a class="btn btn-primary"  href="{{URL:: to('colection/show/'.$line->id)}}"> Show </a></td>
                        </tr>
                        @empty 
                        <p> No  colection </p>
                        @endforelse
                        </table> 
                    </div>

                </div>


            </div>
        </div>
    </div>
    

</div>
@endsection
