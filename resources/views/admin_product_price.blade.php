@extends('layouts.app')
@section('content')
    
    <table class="table">
                <tr>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td><h4><a href="{{ route('admin_insert_product') }}"> Insert Product</a></h4></td>
                     </tr>
    </table>
    <table class="table" border="2">
                <tr>
                    <td> Id </td>
                    <td> product </td>
                    <td> price </td>
                    <td> Action </td>
                    
                </tr>
                <?php foreach($prices as $product_data) { ?>
                <tr>
                    <td><?php  echo $product_data->id ;?> </td>
                    
                    <td>{{ $product_data->product_name	}}</td>
                    <td>{{ $product_data->product_price }}</td>
                   
                    <td>
                    <a href="{{route('admin_edit_product', [$product_data->id])}}"> Edit </a>||   
                    <a href="{{route('product_delete', [$product_data->id])}}"> Delete </a>
                    
                    </td>
                </tr>
                <?php } ?>
    </table>
    @endsection