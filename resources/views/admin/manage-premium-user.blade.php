@extends('layout.adminlayout')


@section('content')
<table>
   
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">User name </th>
        <th scope="col">Email</th>
        <th scope="col">isAdmin</th>
        <th scope="col">isPreminum</th>
        <th scope="col">Update</th>
     <th scope="col">delate</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td data-label="Account">Visa - 3412</td>
        <td data-label="Due Date">04/01/2016</td>
        <td data-label="Amount">$1,190</td>
        <td data-label="Period">03/01/2016 - 03/31/2016</td>
        <td data-label="Amount">$1,190</td>
        <td data-label="Period"><button class="btn-table btn-update">Update</button></td>
        <td data-label="Amount"><button class="btn-table btn-del">Delete</button></td>
      </tr>
    
    </tbody>
  </table>
@endsection

