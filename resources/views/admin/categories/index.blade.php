@extends('layouts.admin')

@section('content')

 
        <div class="row mb-2 mt-2">
          <div class="col-5 mt-5 ml-1">
          Categories
          </div>
          <div class="col-6 mt-5">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
              <!-- <a href="{{url('/admin')}}">Home</a> -->
              <a href="/admin">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Cetegories</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <section class='content'>
            <div class='container-fluid'>
            <p><a class='btn btn-primary'>Add new Category</a></p>
                <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th colspan='2'>Action</th>
                </tr>
                @foreach($category as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td><a class='btn btn-info' href='#'>Edit</a></td>
                        <td><a class='btn btn-danger' href='#'>Delete</a></td>
                    </tr>

                @endforeach

                
                </table>
            </div>
        </section>
  
  
@endsection