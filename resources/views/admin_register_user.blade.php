@extends('layouts.app')
@section('content')

    <table class="table" border="2">
                <tr>
                    <td> Id </td>
                    <td> Name </td>
                    <td> Email </td>
                    <td> Password </td>
                    <td> Action </td>
                </tr>
                <?php foreach($users as $user_data) { ?>
                <tr>
                    <td><?php  echo $user_data->id ;?> </td>
                    <td>{{ $user_data->name }}</td>
                    <td>{{ $user_data->email }}</td>
                    <td>{{ $user_data->password }}</td>
                    <td>
                        
                    <a href="{{route('user_delete', [$user_data->id])}}"> Delete </a>

                    </td>
                </tr>
                <?php } ?>
    </table>
    @endsection