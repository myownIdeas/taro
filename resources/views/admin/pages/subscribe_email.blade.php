@extends('admin.layout.header')
@section('content')
        <!-- top-bar end -->
<!-- main-content start -->
<div class="loans-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                    <div class="loans-overview">
        <div class="heading">
            <h2>Weekly Activity</h2>
        </div>
        <div class="overview-table">
            <div class="table-responsive">
                <table>
                    <tr>
                        <th>SL No</th>
                        <th>Email</th>

                    </tr>
                    @foreach($response['data']['emails'] as $email)
                    <tr>
                        <td>{{$email['subscribe_email_uuid']}}</td>
                        <td>{{$email['email']}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

            </div>
        </div>
    </div>
</div>
<!-- main-content end -->
@endsection