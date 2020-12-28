 <!--เรียกใช้งาน template -->
 @extends('layouts.master_template')
 @section('title')รายชื่อพนักงาน @endsection
 @section('content')

 <div class="jumbotron">
    <div class="container">
    <h1 class="display-3">รายชื่อพนักงาน</h1>
    <p class="lead">เเสดงข้อมูล</p>
    <hr class="my-2">
    </div>
</div>
    <div class="container">
        <table class="table">
            <thead>
                <tr class="bg-dark text-white">
                    <th>ID</th>
                    <th>Fullname</th>
                    <th>Employment</th>
                    {{-- <th>Gender</th>
                    <th>Email</th>
                    <th>Tel</th> --}}
                    <th>Age</th>
                    {{-- <th>Address</th>
                    <th>Status</th> --}}
                    <th>birthday</th>
                    

                </tr>
            </thead>
            <tbody>
                @foreach($emps as $em)
                <tr>
                    <td>{{$em->id}}</td>
                    <td>{{$em->fullname}}</td>
                    <td>{{$em->employment}}</td>
                    {{-- <td>{{$em->gender}}</td>
                    <td>{{$em->email}}</td>
                    <td>{{$em->tel}}</td> --}}
                    <td>{{$em->age}}</td>
                    {{-- <td>{{$em->address}}</td>
                    <td>{{$em->status}}</td> --}}
                    <td>{{$em->birthday}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
 @endsection
