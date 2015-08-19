<div class="modal fade" id="pwChangeModal{{ $userId }}" tabindex="-1" role="dialog"
     aria-labelledby="Change_User_password"
     aria-hidden="true">
    <div class="modal-dialog" style="max-width: 25%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Change password for <strong><?php echo ucfirst($user->username);?></strong></h4>
            </div>
            @include('users.manager.password.create', ['userId'=>$userId]) {{-- This form is loaded thanks to View Composers' Method --}}
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
