{{--resources/views/users/manager/index.blade.php--}}

<div class="container">

    @include('vendor.flash.message')
    @include('common.errors')


    <div class="row">
        <h1 class="pull-left">All users' list</h1>
    </div>

    <div class="row">
        @if($users->isEmpty())
            <div class="well text-center">No Users found.</div>
        @else
            @include('users.manager.table')
        @endif
    </div>

    @include('common.paginate', ['records' => $users])
</div>
