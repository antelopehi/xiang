<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $page_title or "AdminLTE Dashboard" }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{{ asset("/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/bower_components/AdminLTE/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/bower_components/AdminLTE/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />
</head>
<body class="skin-blue">
<div class="wrapper">
    @include('header')
    <section class="content col-sm-5">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">紀錄X值，並察看最新10筆內容。</h3>
            </div>
            <form class="form-horizontal" action="/demo/view"  method="post">
                <input type="hidden" name="_method" value="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                <div class="form-group">
                  <label for="x" class="col-sm-2 control-label">X-值</label>
                  <div class="col-sm-10">
                    <input type="number" name="x" class="form-control" id="x" min="0" placeholder="X值">
                  </div>
                </div>
              </div>
              <div class="box-footer">
              　<input type="reset" class="btn btn-default" value="清除表單">
                <button type="submit" class="btn btn-info pull-right">送出</button>
              </div>
            </form>
          </div>
    </section>
</div><!-- ./wrapper -->
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js'></script>
<script>
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
</script>
<script src="{{ asset ("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
<script src="{{ asset ("/bower_components/AdminLTE/dist/js/app.min.js") }}" type="text/javascript"></script>
</body>
</html>