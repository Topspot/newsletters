@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
articles List
@parent
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Articles</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>articles</li>
        <li class="active">articles</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title pull-left"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Articles List
                </h4>
                <div class="pull-right">
                    <a href="{{ route('admin.articles.create') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> @lang('button.create')</a>
                </div>
            </div>
            <br />
            <div class="panel-body">
                <table class="table table-bordered " id="table">
                    <thead>
                        <tr class="filters">
                            <th>ID</th>
                            <th>Article_title</th>
							<th>Article_detail</th>
							<th>Article_image</th>
							<th>Article_link</th>
							<th>Attorney Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <td>{!! $article->id !!}</td>
                            <td>{!! $article->article_title !!}</td>
                            <td>{!! $article->article_detail !!}</td>
                            <td>{!! $article->article_image !!}</td>
                            <td>{!! $article->article_link !!}</td>
                            <td>{!! $article->attorney->name !!}</td>
							
                            <td>
                                <a href="{{ route('admin.articles.show', $article->id) }}">
                                    <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view article"></i>
                                </a>
                                <a href="{{ route('admin.articles.edit', $article->id) }}">
                                    <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit article"></i>
                                </a>
                                <a href="{{ route('admin.articles.confirm-delete', $article->id) }}" data-toggle="modal" data-target="#delete_confirm">
                                    <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete article"></i>
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
