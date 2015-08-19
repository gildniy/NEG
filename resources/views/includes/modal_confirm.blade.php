{{--Assignment of values to let the modal before it is included in the template--}}

{{--*/ $dataTitle = 'Change User password:' /*--}}
{{--*/ $dataMessage = 'Here is the display of the modal message. This will be used in the website as in any other website? or&hellip;' /*--}}

<div class="modal fade" id="confirm" tabindex="1000">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">{{$dataTitle}}</h4>
            </div>
            <div class="modal-body">
                {{$dataMessage}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Dismiss</button>
                <button type="button" class="btn btn-success" id="confirm">Confirm</button>
            </div>
            <!-- /.modal-footer -->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div><!-- /.modal -->