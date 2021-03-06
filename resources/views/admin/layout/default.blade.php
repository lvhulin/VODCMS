<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        @include('admin.public.meta')
    </head>
    <body class="inside-header inside-aside {:defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''}">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>后台首页<small>Home</small></h1>
                            </section>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <li><a href="{:admin_url('admin/index/show')}"><i class="fa fa-home"></i>&nbsp;&nbsp;后台首页</a></li>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                {volist name="nav_list" id="vo"}
                                <li><a {if condition="($vo.name neq $nav_title.name) and ($vo.child eq 1)"}href="{:admin_url($vo.name)}"{else/}href="javascript:;"{/if}>{$vo.title}</a></li>    
                                {/volist}                                     
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <div class="content">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.public.script')
    </body>
</html>