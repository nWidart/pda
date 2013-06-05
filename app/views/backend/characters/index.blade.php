@extends('backend/layouts/default')

{{-- Page title --}}
@section('title')
Character Management ::
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="page-header">
    <h1>
        Character Management
        <div class="pull-right">
            <a href="{{ route('create/user') }}" class="btn btn-small btn-info"><i class="icon-plus-sign icon-white"></i> Create</a>
        </div>
    </h1>
</div>

{{ $characters->links() }}

<table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th class="span1">@lang('admin/users/table.id')</th>
            <th class="span1">User</th>
            <th class="span1">Name</th>
            <th class="span1">Level</th>
            <th class="span1">Paragon Level</th>
            <th class="span2">@lang('table.actions')</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($characters as $character)
        <tr>
            <td>{{ $character->id }}</td>
            <td>{{ $character->user->first_name }}</td>
            <td>{{ $character->name }}</td>
            <td>{{ $character->level }}</td>
            <td>{{ $character->paragonLevel }}</td>
            <td>
                <!-- <a href="{{ route('update/character', $character->id) }}" class="btn btn-mini">@lang('button.edit')</a> -->
                <a href="{{ route('delete/character', $character->id) }}" class="btn btn-mini btn-danger">@lang('button.delete')</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $characters->links() }}
@stop
@section('scripts')
<script>
$(document).ready(function()
{
    // Styling the table and making it sortable
    $("table").tablecloth({
        theme: "default",
        bordered: true,
        condensed: true,
        sortable: true,
        striped: true,

    });
});
</script>
@stop
