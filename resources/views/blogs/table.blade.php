<table class="table">
    <thead>
    <th>Title</th>
    <th>Body</th>
    <th>Publish</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($blogs as $blog)
        <tr>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->body }}</td>
            <td>{{ $blog->publish }}</td>
            <td>
                <a href="{{ route('blogs.edit', [$blog->id]) }}"><i class="glyphicon glyphicon-edit"></i></a>


                <a href="{{ route('blogs.delete', [$blog->id]) }}"
                   data-toggle="modal"
                   data-target="#confirmDelete">
                    {{--data-title="{{$dataTitle}}" data-message="{{$dataMessage}}">--}}
                    <i class="glyphicon glyphicon-remove"></i>
                </a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{--Here Below I made an assignment of values to let the modal as an included template--}}

{{--*/ $dataTitle = 'Delete Blog' /*--}}
{{--*/ $dataMessage = 'Are you sure you want to delete this blog ? or&hellip;' /*--}}

@include('includes.modal_confirm')
