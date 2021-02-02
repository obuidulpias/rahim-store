@extends('admin')


@section('body')

<div class="row">
    <div class="col-md-8 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">

        </div>
        <div class="panel-body">
          <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
          <form action="{{ route('new-product') }}" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group">
              <label class="control-label col-md-4">Product Name</label>
              <div class="col-md-8">
                <input type="text" name="product_name" class="form-control"/>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4">Product Price</label>
              <div class="col-md-8">
                <input type="number" name="product_price" class="form-control"/>
              </div>

            </div>
            <div class="form-group">
              <label class="control-label col-md-4">Product Expiry Date</label>
              <div class="col-md-8">
              <input type="text" name="product_expiry_date" class="form-control"/>  
              </div>

            </div>
              
            <div class="form-group">
              <div class="col-md-12">
                <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Product Info">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

@endsection
