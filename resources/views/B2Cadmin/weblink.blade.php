@extends('layouts.defaultmain')
@section('content')
<!-- content -->
<div class="content ">
    <div class="row">
        <div class="col-8">
            <div class="mb-2 mt-2 contentheading">
                <h3 class="f_s_25 f_w_700 dark_text mr_30">Store Weblink</h3>
                
            </div>
        </div>
       
    </div>

    <div class="contentborder">
        <form class="row g-3" autocomplete="off" action="{{ url('/link_save') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group">
                            @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                            @endif
                            @if (session('success'))
                            <div class="alert alert-success">
                                <label>Link</label>&nbsp;<a href="http://{{ session('success') }}" target="_blank">{{ session('success') }}</a>
                                <label> generated successfully..!!!</label>
                            </div>
                            @endif
                            <label for="link">Store Link</label>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="text" value="www" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" value="" class="form-control" id="link_cl" name="link_cl" onfocusout="show_link(this.value)">
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" value="bechobazar.com" class="form-control" readonly>
                                    </div>
                                </div><br>
                                <div class="row" id="link">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="submit" class="btn btn-primary" value="Submit" id="sub">&nbsp;&nbsp;
                                        <input type="reset" class="btn btn-secondary" value="Clear">
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
function show_link(val) {
    $.ajax({
        type:'POST',
        url:'{{ url('check_link') }}',
        data:{'_token':'{{ csrf_token() }}','val':val},
        success:function(res)
        {
            console.log(res);
            if(res.status==false)
            {
                $('#link').text('');
                $('#link').append('<a href="#" style="color:red">www.'+val+'.bechobazar.com</a> <br><span style="color:red">'+res.msg+'</span>');
                $('#link_cl').focus();
                $('#link_cl').attr('style','border-color:red;');
                $('#sub').attr('disabled','true');
                

            }else
            {
                $('#link').text('');
                $('#link').append('<a href="#" style="color:green">www.'+val+'.bechobazar.com</a><br><span style="color:green">'+res.msg+'</span>');
                $('#link_cl').attr('style','border-color:green;');
                $('#sub').removeAttr('disabled');
            }
            
        }
    });
    console.log(val);
   
}
</script>
@stop