@extends('layouts.backend')

@section('htmlheader_title')
	推荐信息
@endsection

@section('contentheader_title')
	推荐信息
@endsection

@section('contentheader_description')
	推荐列表
@endsection

@section('main-content')
	<div class="container spark-screen">
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>标题</th>
					<th>简介</th>
					<th>头图</th>
					<th>类型</th>
					<th>时间</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
			@foreach($recommends as $recommend)
				<tr>
					<td>{{ $recommend->id}}</td>
					<td>{{ $recommend->subject}}</td>
					<td>{{ $recommend->summary}}</td>
					<td><img src="{{ $recommend->headimage}}"></td>
					<td>{{ $recommend->type}}</td>
					<td>{{ $recommend->created_at}}</td>
					<td>
						<a class="btn btn-default" href="{{ url('/backend/recommend/add') }}" role="button">添加</a>
						<a class="btn btn-default" href="{{ url('/backend/recommend/add',$recommend->id) }}" role="button">修改</a>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
@endsection