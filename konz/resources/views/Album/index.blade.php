@extends('album')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CREATE NEW ALBUM</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('album.create') }}"> Create New album</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th width="50px" class="text-center">Id</th>
            <th width="280px"class="text-center">Nama Album</th>
            <th width="280px"class="text-center">Deskripsi</th>
            <th width="280px"class="text-center">Tanggal Dibuat</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($album as $album)
        <tr>
            <td>{{ $album->idn }}</td>
            <td>{{ $album->NamaAlbum }}</td>
            <td>{{ $album->Deskripsi }}</td>
            <td>{{ $album->TanggalDibuat }}</td>
            <td class="text-center">
                <form action="{{ route('album.destroy',$album->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('album.show',$album->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('album.edit',$album->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
      
@endsection