
@extends('layouts.app')
@section('content')
    <table class="table" border="2">
                <tr>
                    <td> Id </td>
                    <td> Name </td>
                    <td> Email </td>
                    <td> Message </td>
                    <td> Action </td>
                </tr>
                <?php foreach($messages as $message) { ?>
                <tr>
                    <td><?php  echo $message->id ;?> </td>
                    
                    <td>{{ $message->name	}}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->message }}</td>
                    <td>
                        
                    <a href="{{route('message_delete', [$message->id])}}"> Delete </a>

                    </td>
                </tr>
                <?php } ?>
    </table>
    @endsection