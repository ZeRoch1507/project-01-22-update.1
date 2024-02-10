@extends('layouts.master_backend')
@section('con')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title" style="margin-top:2cm">Product</h4>
        <div class="table-responsive">
            <a href="{{ route('p.create') }}"class="btn btn-success mx-3"><i class='bx bxs-plus-circle' style="margin-top: 1cm"></i> เพิ่มข้อมูล</a>
          <table class="table table-bordered" style="color: #fff ;margin-top: 0.5cm">
            <thead style="color: #fff" >
              <tr style="background-color: #d90009;">
              <th style="color:#fff;">ID</th>
              <th style="color:#fff;">Name</th>
              <th style="color:#fff;">Category</th>
              <th style="color:#fff;">Price</th>
              <th style="color:#fff;">Image</th>
              <th style="color:#fff;">Description</th>
              <th style="color:#fff;">Created_at</th>
              <th style="color:#fff;">Updated_at</th>
              <th style="color:#fff;">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($product as $pro)
            <tr>
            <td>{{ $product->firstItem() + $loop->index }}</td>
            <td>{{ $pro->name }}</td>
            <td>{{ $pro->category->name}}</td>
            <td>{{ $pro->price }}</td>
            <td>
                <img src ="{{ asset('backend/product/resize/'.$pro->image) }}" alt="">
             </td>
            <td>{{ $pro->description }}</td>
            <td>{{ $pro->created_at }}</td>
            <td>{{ $pro->updated_at }}</td>
            <td>
              <a href="{{ route('p.edit',$pro->product_id) }}"><i class="mdi mdi-border-color" style="color: #fff ; margin:5px"></i></a>
              <a href="{{ url('admin/product/delete/'.$pro->product_id) }}"><i class="mdi mdi-close " style="color: #fff ; margin:5px"></i></a>
            </td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
