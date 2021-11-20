@extends('base')


@section('content')
    
@include('info')

<div class="containerfluid">
    <div class="row">
        <div class="col-md-12">

            <div class="add float-right">
            <a href="{{url('destinations/create')}}" class="btn btn-primary">Add New</a>
            </div>

            <h1>Destinations</h1>

            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="bg-primary">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Type</th>
                        <th>Rating</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($destinations as $d): ?>
                        <tr>
                            <td><?= $d->id ?> </td>
                            <td><?= $d->name ?> </td>
                            <td><?= $d->address ?> </td>
                            <td><?= $d->type ?> </td>
                            <td><?= $d->rating ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection