@extends('layouts.master_backend')
@section('con')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
      <div class="col-md-12">
        <div class="card mb-9">
          <h5 class="card-header">Edit Product</h5>
          <div class="card-body">
            <form method="POST" action="{{ url('admin/product/update/'.$pro->product_id) }}" enctype="multipart/form-data" >
              @csrf
            <div>
                <br>
              <label for="defaultFormControlInput" class="form-label">Product Name</label>
                            <input
                                style="color:#fff"
                                name="name"
                                value="{{ $pro->name }}"
                                type="text"
                                class="form-control"
                                id="defaultFormControlInput"
                                placeholder="กรุณากรอกชื่อสินค้า"
                                aria-describedby="defaultFormControlHelp"
                            />


                            <label for="defaultFormControlInput" class="form-label">Price</label>
                            <input
                                style="color:#fff"
                                name="price"
                                value="{{ $pro->price }}"
                                type="text"
                                class="form-control"
                                id="defaultFormControlInput"
                                placeholder="กรุณากรอกราคาสินค้า"
                              aria-describedby="defaultFormControlHelp"
                            />

                            <label for="defaultFormControlInput" class="form-label">Description</label>
                            <input
                                style="color:#fff"
                                name="description"
                                value="{{ $pro->description }}"
                                type="text"
                                class="form-control"
                                id="defaultFormControlInput"
                                placeholder="กรุณากรอกรายละเอียดสินค้า"
                                aria-describedby="defaultFormControlHelp"
                            />

                            <label for="defaultFormControlInput" class="form-label">Image</label>
                            <input
                                value="{{ $pro->image }}"
                                style="color:#fff"
                                name="image" type="file" class="form-control"  id="inputGroupFile02" />
                                <div class="mt-3">
                                    @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                <div class="mt-4">
                                    <img src="{{ ('backend/product/resize/'.$pro->image) }}" alt="">
                                </div>
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>

                            <label for="exampleFormControlSelect1" class="form-label">Category</label>
                            <select  name="category_id" id="exampleFormControlSelect1" aria-label="Default select example">
                              @foreach ($cat as $c)
                              <option value="{{ $c->category_id }}" @if ($c->category_id == $pro->category_id)
                                selected
                              @endif
                              {{ $c->name }}                              @endforeach

                              value="{{ $pro->category }}"
                            </select>
              <div class="mt-3">
              @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              </div>
              <input type="submit" value="อัพเดท" class="btn btn-primary mt-3" >
              <a href="{{ route('p.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
