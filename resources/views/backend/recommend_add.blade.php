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
<div class="container spark-screen box box-primary">
	<form action="{{ url('/backend/recommend/add') }}" method="POST" role="form">
		<legend>推荐</legend>

		<div class="form-group">
			<label for="">标题</label>
			<input type="text" class="form-control" id="" placeholder="请输入标题">
		</div>
		<div class="form-group">
			<label for="textareaSummary" class="control-label">简介:</label>
			<div>
				<textarea name="summary" id="textareaSummary" class="form-control" rows="3" required="required"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="headimage">头图</label>
			<input type="file" id="headimage">
			<p class="help-block">Example block-level help text here.</p>
		</div>
		<div class="form-group">
			<select name="type" id="inputType" class="form-control" required="required">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
		</div>

		<div class="form-group">
			<div class="radio-inline">
				<label>
					<input type="radio" name="status" id="inputStatus" value="0" checked="checked">
					0
				</label>
			</div>
			<div class="radio-inline">
				<label>
					<input type="radio" name="status" id="inputStatus" value="1" checked="checked">
					1
				</label>
			</div>
		</div>
		<input type="hidden" name="id" value="{{$id}}" />

		{{ csrf_field() }}
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection

<div class="radio">
	<label>
		<input type="radio" name="test" id="inputTest" value="" checked="checked">
		Radio Box
	</label>
</div>

<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Title!</strong> Alert body ...
</div>
<span class="badge">Badge</span>