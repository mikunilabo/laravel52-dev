@extends('layouts.base')

@section('meta')
	<title>テストページ｜{{ $Fixed['info']['SiteName'] }}</title>
	<!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
@endsection

@include('layouts.gnavi')

@section('content')
	<section class="section">
		<div class="container">
			<div class="row animated fadeIn">
				<div class="col-md-4 col-md-offset-1">
					<ul class="breadcrumb">
						<li><a href="/">Home</a></li>
						<li class="active">Test</li>
					</ul>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<section class="section">
		<div class="container">
			<div class="row animated fadeIn">
				<div class="col-md-10 col-md-offset-1">
					
					@include('flash::message')
					
					<div class="panel panel-info">
						<div class="panel-heading">フォームテスト</div>
						<div class="panel-body">
							
							{!! Form::open(['files' => true, 'class' => 'form-horizontal', 'id' => 'form']) !!}
								
								@if(false)
									<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label">Name</label>
										<div class="col-md-6">
											{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Your Name']) !!}
											
											@if ($errors->has('name'))
												<span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
											@endif
										</div>
									</div>
									
									<div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label">Age</label>
										<div class="col-md-6">
											{!! Form::selectRange('number', 18, 60, ['class' => 'form-control']) !!}
											
											@if ($errors->has('age'))
												<span class="help-block"><strong>{{ $errors->first('age') }}</strong></span>
											@endif
										</div>
									</div>
									
									<div class="form-group{{ $errors->has('month') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label">Month</label>
										<div class="col-md-6">
											{!! Form::selectMonth('month') !!}
											
											@if ($errors->has('month'))
												<span class="help-block"><strong>{{ $errors->first('month') }}</strong></span>
											@endif
										</div>
									</div>
									
									<div class="form-group{{ $errors->has('birth_day') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label">Birth day</label>
										<div class="col-md-6">
											{!! Form::date('birth_day', null, ['class' => 'form-control']) !!}
											
											@if ($errors->has('birth_day'))
												<span class="help-block"><strong>{{ $errors->first('birth_day') }}</strong></span>
											@endif
										</div>
									</div>
									
									<div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label">Price</label>
										<div class="col-md-6">
											{!! Form::number('price', null, ['class' => 'form-control']) !!}
											
											@if ($errors->has('price'))
												<span class="help-block"><strong>{{ $errors->first('price') }}</strong></span>
											@endif
										</div>
									</div>
								@endif
								
								<div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}" id="email_response">
									<label class="col-md-4 control-label" for="email">E-Mail</label>
									<div class="col-md-6">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											{!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email']) !!}
										</div>
										<span id="email-inputicon" class="glyphicon glyphicon-ok form-control-feedback"></span>
										<span id="email_judge"></span>
										
										@if ($errors->has('email'))
											<span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
										@endif
									</div>
								</div>
								
								@if(false)
									<div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label">URL</label>
										<div class="col-md-6">
											{!! Form::url('url', null, ['class' => 'form-control']) !!}
											
											@if ($errors->has('url'))
												<span class="help-block"><strong>{{ $errors->first('url') }}</strong></span>
											@endif
										</div>
									</div>
									
									<div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label">Start Date</label>
										<div class="col-md-6">
											{!! Form::date('start_date', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
											
											@if ($errors->has('start_date'))
												<span class="help-block"><strong>{{ $errors->first('start_date') }}</strong></span>
											@endif
										</div>
									</div>
									
									<div class="form-group{{ $errors->has('end_date') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label">End Date</label>
										<div class="col-md-6">
											{!! Form::date('end_date', null, ['class' => 'form-control']) !!}
											
											@if ($errors->has('end_date'))
												<span class="help-block"><strong>{{ $errors->first('end_date') }}</strong></span>
											@endif
										</div>
									</div>
									
									<div class="form-group{{ $errors->has('sellSituation') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label">SelectBox</label>
										<div class="col-md-6">
											{!! Form::select('sellSituation', $arrFixed['sellSituation'], null, ['class' => 'form-control']) !!}
											
											@if ($errors->has('sellSituation'))
												<span class="help-block"><strong>{{ $errors->first('sellSituation') }}</strong></span>
											@endif
										</div>
									</div>
									
									<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label">Status</label>
										<div class="col-md-6">
											<label>{!! Form::radio('status', '1', true		 , ['required']) !!}有効&nbsp;&nbsp;&nbsp;</label>
											<label>{!! Form::radio('status', '0', old('status'), ['required']) !!}無効</label>
											
											@if ($errors->has('status'))
												<span class="help-block"><strong>{{ $errors->first('status') }}</strong></span>
											@endif
										</div>
									</div>
									
									<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label">Image</label>
										<div class="col-md-6">
											{!! Form::file('image', null) !!}
											
											@if ($errors->has('image'))
												<span class="help-block"><strong>{{ $errors->first('image') }}</strong></span>
											@endif
										</div>
									</div>
									
									<div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label">Text</label>
										<div class="col-md-6">
											{!! Form::textarea('text', null, ['class' => 'form-control ckeditor']) !!}
											
											@if ($errors->has('text'))
												<span class="help-block"><strong>{{ $errors->first('text') }}</strong></span>
											@endif
										</div>
									</div>
								@endif
								
								<div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
									<label class="col-md-4 control-label">test</label>
									<div class="col-md-6">
										{!! Form::textarea('test', null, ['class' => 'form-control', 'id' => 'test', 'rows' => '3']) !!}
										<span id="test_judge"></span>
										
										@if ($errors->has('test'))
											<span class="help-block"><strong>{{ $errors->first('test') }}</strong></span>
										@endif
									</div>
								</div>
								
								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										@if(\App::environment() === 'local')
											<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-import"></span>&nbsp;送信</button>
											<a href="/test/testmail" class="btn btn-success"><span class="glyphicon glyphicon-send"></span>&nbsp;Mail送信</a>
											<a href="/test/get_json" class="btn btn-warning"><span class="glyphicon glyphicon-import"></span>&nbsp;JSON取得</a>
											<a href="/test/show_json" class="btn btn-warning"><span class="glyphicon glyphicon-import"></span>&nbsp;JSON表示</a>
											<a href="/test/output_xml" class="btn btn-primary"><span class="glyphicon glyphicon-import"></span>&nbsp;XML生成</a>
										@endif
									</div>
								</div>
							{!! Form::close() !!}
						</div><!-- .panel-body -->
					</div><!-- .panel -->
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section>
@endsection

@include('layouts.footer')

@section('script')
	<script type="text/javascript" src="/js/change.input.color.js"></script>
	<script type="text/javascript">
		
		// リアルタイム入力文字数表示
		$("#test").keyup(function(){
			checkLength(5, '#test', '#test_judge');
		});
		
		// E-Mail Duplication Check on Ajax
		$("#email").keyup(function(){
			chkDuplicateEmail('#email', '#email_judge', 'POST', 'JSON', '/ajax/chkDuplicateEmail');
		});
		
		// E-Mail Duplication Check on Ajax
		$("#email").focusout(function(){
			chkDuplicateEmail('#email', '#email_judge', 'POST', 'JSON', '/ajax/chkDuplicateEmail');
		});
		
	</script>
	@endsection