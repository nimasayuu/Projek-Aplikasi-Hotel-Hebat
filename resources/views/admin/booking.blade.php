<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
                .table_deg
        {
            border: 2px solid white;
            margin: auto;
            width: 80%;
            text-align: center;
            margin-top: 40px;
        }

        .th_deg
        {
            background-color: skyblue;
            padding: 15px;
        }

        tr
        {
            border: 3px solid white;
        }

        td
        {
            padding: 10px;
        }
    </style>
  </head>
  <body>
    @include('admin.header')

    @include('admin.sidebar')

      <!-- Sidebar Navigation end-->

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <table class="table_deg">
            <tr>
                <th class="th_deg">Room_id</th>
                <th class="th_deg">Custemer name</th>
                <th class="th_deg">Email</th>
                <th class="th_deg">Phone</th>
                <th class="th_deg">Arrival Date</th>
                <th class="th_deg">Leaving Date</th>
                <th class="th_deg">Status</th>

            </tr>
                @foreach($data as $data)
            <tr>
                <td>{{$data->room_id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->start_date}}</td>
                <td>{{$data->end_date}}</td>
                <td>{{$data->status}}</td>
            </tr>
                @endforeach
          </div>
        </div>
      </div>
        @include('admin.footer')

  </body>
</html>