<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Search Users</title>

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

    {{ Html::style('assets/css/bootstrap.css') }}
    {{ Html::style('assets/css/fresh-bootstrap-table.css') }}
    {{ Html::style('assets/css/custom-style.css') }}

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

</head>
<body>


<div class="wrapper">
    <div class="fresh-table full-color-orange full-screen-table">
        <!--    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
                Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
        -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="toolbar">
                        <button id="alertBtn" class="btn btn-default">Alert</button>
                        <div class="col-lg-3 pull-right">
                                <div class="form-group">
                                    {{ Form::text('search', null, array(
                                        'class' =>  'form-control',
                                        'id'    =>  'search',
                                        'placeholder'   => 'Search'
                                    )) }}
                                </div>
                        </div>
                    </div>


                    <table id="fresh-table" class="table">
                        <thead>
                            <th data-field="id">ID</th>
                            <th data-field="name" data-sortable="true">Full Name</th>
                            <th data-field="email" data-sortable="true">Email Address</th>
                            <th data-field="country" data-sortable="true">Mobile No</th>
                            <th data-field="salary" data-sortable="true">Salary</th>
                            <th data-field="city">Location</th>
                            <th data-field="actions" data-formatter="operateFormatter" data-events="operateEvents">Actions</th>
                        </thead>
                        <tbody id="tbody">
                            @foreach($customers as $index => $customer)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $customer->firstname }} {{ $customer->lastname }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->mobile }}</td>
                                    <td>${{ $customer->salary }}</td>
                                    <td>{{ $customer->location }}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>


{{ Html::script('assets/js/jquery-1.11.2.min.js') }}
{{ Html::script('assets/js/bootstrap.js') }}
{{--{{ Html::script('assets/js/bootstrap-table.js') }}--}}
{{--{{ Html::script('assets/js/custom-script.js') }}--}}


<script type="text/javascript">
    $('#search').on('keyup', function () {
       $value = $(this).val();
       $.ajax({
            type:'get',
            url:'{{ URL::to('search') }}',
           data:{'search': $value},
           success:function(data){
                console.log(data);
                $('#tbody').html(data);
           }
       });
    });
</script>

</body>
</html>