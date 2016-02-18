@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
similars List
@parent
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Similars</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>similars</li>
        <li class="active">similars</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title pull-left"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Similars List
                </h4>

            </div>
            <br />
            <div class="panel-body">
                <table class="table table-bordered " id="table">
                    <thead>
                        <tr class="filters">
                            <th>ID</th>
                            <th>Article 1 Heading</th>
                            <th>Article 2 Heading</th>
                            <th>Article 3 Heading</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($similars as $similar)
                        <tr>
                            <td>{!! $similar->id !!}</td>
                            <td>{!! $similar->article1_heading !!}</td>
                            <td>{!! $similar->article2_heading !!}</td>
                            <td>{!! $similar->article3_heading !!}</td>
                            <td>
                                <a href="{{ route('admin.similars.show', $similar->id) }}">
                                    <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view similar"></i>
                                </a>
                                <a href="{{ route('admin.similars.edit', $similar->id) }}">
                                    <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit similar"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>    <!-- row-->
</section>
@stop

{{-- Body Bottom confirm modal --}}
@section('footer_scripts')
<script>
$(document).ready(function() {
	$('#table').DataTable();
});
</script>
<div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    </div>
  </div>
</div>
<script>$(function () {$('body').on('hidden.bs.modal', '.modal', function () {$(this).removeData('bs.modal');});});</script>
@stop
