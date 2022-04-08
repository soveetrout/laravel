
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      

      @include('admin.sidebar')

        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper">

        <div align="center" style="padding-top:100px;">
            <table>
                <tr style="background-color:black;">
                    <th style="padding:10px">Patient Name</th>
                    <th style="padding:10px">Email</th>
                    <th style="padding:10px">Phone</th>
                    <th style="padding:10px">Doctor</th>
                    <th style="padding:10px">Date</th>
                    <th style="padding:10px">Message</th>
                    <th style="padding:10px">Status</th>
                    <th style="padding:10px">Approve</th>
                    <th style="padding:10px">Cancel</th>
                </tr>

                @foreach($data as $appoint)
                <tr style="background-color:skyblue;" align="center">
                    <td>{{$appoint->name}}</td>
                    <td>{{$appoint->email}}</td>
                    <td>{{$appoint->phone}}</td>
                    <td>{{$appoint->doctor}}</td>
                    <td>{{$appoint->date}}</td>
                    <td>{{$appoint->message}}</td>
                    <td>{{$appoint->status}}</td>
                    <td>
                        <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approve</a>
                    </td>
                    <td>
                    <a class="btn btn-danger" href="{{url('cancelled',$appoint->id)}}">Cancel</a>
                    </td>
                </tr>
                @endforeach
</table>
        </div>

        </div>

   
    @include('admin.script')


  </body>
</html>