@extends('layouts.app')
@section('content')

<table class="table" border="2">
                <tr>
                    
                    <td>id	</td>
                    <td>fullname	</td>
                    <td>address</td>
                    <td>scarp_detail</td>
                    <td>expected_date</td>
                    <td>expected_time</td>
                    <td>contact_no</td>
                    <td>email</td>
                    <td>refernces_email</td>
                    <td>Status</td>
                    <td>Action</td>
                  </tr>  
                <?php foreach($orders as $order) { ?>
                <tr>
                    <td><?php  echo $order->id ;?> </td>
                    
                    <td>{{ $order->fullname	}}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ $order->scarp_detail}}</td>
                    <td>{{ $order->expected_date }}</td>
                    <td>{{ $order->expected_time }}</td>
                    <td>{{ $order->contact_no }}</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->refernces_email }}</td>
                    <td>{{ $order->Status }}</td>
                   
                    <td>
                        
                    <a href="{{route('admin_order_update', [$order->id])}}"> Update Status </a>||
                    <a href="{{route('Scrap_order_delete', [$order->id])}}"> Delete </a>
                    </td>
                </tr>
                <?php } ?>
    </table>
@endsection