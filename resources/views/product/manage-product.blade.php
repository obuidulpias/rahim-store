@extends('admin')


@section('body')

<div class="row">
  <div class="col-md-10">
    <div class="panel panel-default">
      <div class="panel-heading">

      <div class="panel-body">
        <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
          <div class="table-responsive">
            <table class="table table-borderd">
              <tr class="bg-success">
                <th>Sl No</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Expiry Date</th>
                
                <th>Action</th>
              </tr>

              @php($i=1)
              @foreach($products as $product)
              <tr >
                  <td>{{ $i++ }}</td>
                  <td>{{ $product->product_name }}</td>
                  <td>{{ $product->product_price }}</td>
                  <td>{{ $product->product_expiry_date }}</td>
                  <td>{{ $product->publication_status }}</td>

                  <td>
                    <a href="{{ route('edit-product', ['id'=>$product->id])}}" class="btn btn-success btn-xs" title="Edit">
                      <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a href="{{ route('delete-product', ['id'=>$product->id])}}"  class="btn btn-danger btn-xs" title="Delete">
                      <span class="glyphicon glyphicon-trash"></span>
                    </a>
                  </td>
              </tr>
              @endforeach

            </table>
          </div>
      </div>
    </div>
  </div>
</div>
</div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


@endsection