<!--- Title Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!--- Body Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<!--- Publish Field --->
<div class="form-group col-sm-6 col-lg-4">
    {{--<div class="checkbox">--}}
    {{--<label>{!! Form::checkbox('publish', 1, true) !!}Publish</label>--}}
    {{--</div>--}}

    <div class="checkbox checkbox-primary ">
        <input tabindex="4" type="checkbox" name="publish" id="publish"
               value="1">
        <label for="publish">
            Publish
        </label>
    </div>
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
