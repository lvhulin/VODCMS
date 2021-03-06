@extends('admin.layout.index')
@section('content')
<div class="content">
<div class="panel-intro">
  <div class="panel-heading">
    <div class="panel-lead"><em>系统信息：</em>{$nav_title.remark}</div>
  </div>
 <div class="panel-body" style="background-color:#FFF;margin-bottom:20px;" >               
 <table id="table" class="table table-striped table-bordered table-hover" width="100%">
  <tbody>
                <tr>
                  <td width="130" align="right">程序版本：</td>
                  <td width="160">{$Think.lang.zanpiancms_version}</td>
                  <td width="130" align="right">技术/BUG反馈：</td>
                  <td width="180">{:config('zanpiancms.qq')}</td>
                  <td width="130" align="right">官方地址：</td>
                  <td width=""><a href="{:config('zanpiancms.cmsurl')}" target="_blank">{:config('zanpiancms.cmsurl')}</a></td>
                </tr>                
                <tr>
                  <td width="130" align="right">服务器系统：</td>
                  <td width="160">{php}echo PHP_OS;{/php}</td>
                  <td width="130" align="right">WEB服务器：</td>
                  <td width="340" colspan="3">{php}echo $_SERVER['SERVER_SOFTWARE'];{/php}&nbsp;&nbsp;&nbsp;&nbsp;<a href="{:admin_url('admin/index/phpinfo')}" target="_blank">查看PHPINFO</a></td>
                </tr>
                <tr>
                  <td align="right">安装目录：</td>
                  <td>{$Think.config.site_path}</td>
                  <td align="right">服务器IP/端口：</td>
                  <td>{php}echo ' ('.$_SERVER['SERVER_ADDR'].':'.$_SERVER['SERVER_PORT'].')';{/php}</td>
                  <td align="right">Thinkphp版本：</td>
                  <td align="left">{php}echo THINK_VERSION{/php}</td>
                </tr>
                <tr>
                  <td align="right">文件上传：</td>
                  <td>{php}echo get_cfg_var("file_uploads") ? get_cfg_var("upload_max_filesize") : $error;{/php}</td>
                  <td align="right">磁盘空间：</td>
                  <td align="left">{php}echo floor(disk_free_space(ROOT_PATH) / (1024*1024)).'M'{/php}</td>
                  <td align="right">GD图形库：</td>
                  <td>{php}$gd = @gd_info(); echo $gd['GD Version'] ? $gd['GD Version'] : $error;{/php}</td>
                </tr>
                  </tbody>
                  </table>
           
 <table id="table" class="table table-striped table-bordered table-hover" width="100%">
                   <tbody>
                  <tr>
                  <td width="180" align="right">函数/模块</td>
                  <td width="110"></td>
                  <td width="130" align="right">所需状态</td>
                  <td width="180"></td>
                  <td width="130" align="right"></td>
                  <td width="">当前状态</td>
                </tr>                
               
                {volist name="func" id="item"}
                <tr>
                  <td width="180" align="right">{$item[0]}()</td>
                  <td width="110"></td>
                  <td width="130" align="right">支持</td>
                  <td width="180"></td>
                  <td width="130" align="right"></td>
                  <td width="">{$item[1]}</td>
                </tr>
                {/volist}
                
                  <tr>
                  <td width="180" align="right">目录/文件</td>
                  <td width="110"></td>
                  <td width="130" align="right">所需状态</td>
                  <td width="180"></td>
                  <td width="130" align="right"></td>
                  <td width="">当前状态</td>
                </tr>
                
                {volist name="dirfile" id="item"}
                <tr>
                  <td width="180" align="right">{$item[4]}</td>
                  <td width="110"></td>
                  <td width="130" align="right">{$item[1]}</td>
                  <td width="180"></td>
                  <td width="130" align="right"></td>
                  <td width="">{$item[2]}</td>
                </tr>
                {/volist}
              </tbody>
                    </table>

    </div>
</div></div>
    @endsection