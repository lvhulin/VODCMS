@extends('admin.layout.default')
@section('content')
<div class="panel panel-default panel-intro">
    <div class="panel-heading"><div class="panel-lead"><em>{$nav_title.title}</em>{$nav_title.remark}</div></div>
    <div class="panel-body">
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in">
                <div class="widget-body no-padding">
                <div class="bootstrap-table"><div class="fixed-table-toolbar"><div class="bs-bars pull-left"><div id="toolbar" class="toolbar">
                <a target-form="ids" url="{:admin_url('admin/mcat/up')}" type="submit" class="btn btn-primary btn-disabled ajax-post disabled"><i class="fa fa-refresh"></i> 更新</a> <a href="javascript:;" data-name="添加类型" data-url="{:admin_url('admin/mcat/add')}" class="btn btn-success btn-add btn-editone"><i class="fa fa-plus"></i> 添加</a>   <a  url="{:admin_url('admin/mcat/del')}" target-form="ids" class="confirm btn btn-danger btn-del btn-disabled ajax-post disabled"><i class="fa fa-trash"></i> 删除</a> 
                      <span id="selectedChks" style="display:none">已选择<strong></strong>记录</span>
                    </div></div></div></div>
                    <div class="fixed-table-container" style="padding-bottom: 0px;">
                    <div class="fixed-table-body" id="contents">
                   <form class="ids"> 
                   <table id="table" class="table table-striped table-bordered table-hover" style="margin-top: 0px;" width="100%">
                   <thead>
                   <tr style="height:45px;">
                   <th align="center" class="bs-checkbox"><input name="chkall" type="checkbox" id="chkall"></th>
                   <th style="text-align:center;vertical-align: middle; ">ID</th>
                   <th style="text-align:left;vertical-align: middle; width:20%">类型名</th>
                   <th style="text-align:center;vertical-align: middle; "><a href="javascript:;" class="btn btn-success btn-xs btn-toggle"><i class="fa fa-chevron-up"></i></a></th>
                   <th style="text-align:center;vertical-align: middle; width:80px">排序</th>
                   <th style="text-align:center;vertical-align: middle; width:20%">中文名</th>
                   <th style="text-align:center;vertical-align: middle; ">操作</th>
                  </tr>
                 </thead>
               <tbody> 
                {notempty name="list"}
                {volist name="list" id="mcat"}
                <tr>
                <td style="text-align:center;vertical-align:middle;" >分类</td>
                <td style="text-align:center;vertical-align:middle;" >{$mcat.list_id}</td>
                <td style="text-align:left;vertical-align:middle;">{$mcat['list_name']}&nbsp;&nbsp;(<font color="red">{$mcat['total']}</font>)&nbsp;&nbsp;<a style="color:#F30;" href="javascript:;" data-name="添加类型" data-url="{:admin_url('admin/mcat/add',array('id'=>$mcat['list_id']))}" class="btn-editone"><i class="fa fa-plus-square">&nbsp;</i></a></td>
                <td style="text-align:center;vertical-align:middle;"><a href="javascript:;" data-id="{$mcat.list_id}" data-pid="0" class="btn btn-xs btn-success btn-node-sub"><i class="fa fa-sitemap"></i></a>
                </td>
                <td style="text-align:center;vertical-align: middle;"></td>
                <td style="text-align:center;vertical-align:middle;">&nbsp;</td>
                <td style="text-align:center;vertical-align:middle;">
                <a  url="{:admin_url('admin/mcat/clear',array('id'=>$mcat['list_id']))}" target-form="ids" class="confirm btn btn-danger btn-xs btn-del ajax-get"><i class="fa fa-trash"></i> 清空</a> </td>
              </tr>
              {volist name="mcat.son" id="mcid"}
                <tr style="display: none;">
                <td class="bs-checkbox" style="text-align:center;vertical-align: middle;"><input name="id[]" type="checkbox" value="{$mcid['m_cid']}" id="checkbox"></td>
                <td style="text-align:center;vertical-align:middle;">{$mcid.m_cid}</td>
                <td style="text-align:left;vertical-align:middle;">&nbsp;&nbsp;&nbsp;&nbsp;├─&nbsp;{$mcid['m_name']}</td>
                <td style="text-align:center;vertical-align:middle;"><a href="javascript:;" data-id="{$mcid.m_cid}" data-pid="{$mcat.list_id}" class="btn btn-xs btn-default disabled"><i class="fa fa-sitemap"></i></a></td>
                <td style="text-align:center;vertical-align:middle;">
                <input name="m_order[{$mcid.m_cid}]" class="form-control input-sm" value="{$mcid.m_order}" type="text" style="text-align:center; margin:0 auto;width:70%;"></td>
                
                <td style="text-align:center;vertical-align: middle;"><input name="m_name[{$mcid.m_cid}]" class="form-control input-sm" value="{$mcid.m_name}" type="text" style="text-align:center; width:40%; margin:0 auto"></td> 
                <td style="text-align:center;vertical-align:middle;">
                <a href="javascript:;" data-name="编辑类型" data-url="{:admin_url('admin/mcat/edit',array('id'=>$mcid['m_cid']))}" class="btn btn-success btn-editone btn-xs"><i class="fa fa-pencil"></i></a> <a  url="{:admin_url('admin/mcat/del',array('id'=>$mcid['m_cid']))}" class="confirm btn btn-danger btn-xs ajax-get"><i class="fa fa-trash"></i></a></td>
              </tr>
              {/volist}
                 </tr>                
                     {/volist}
                 {else/}<tr><td style="text-align:center;vertical-align: middle;" colspan="10" >抱歉，没有找到相关内容！</td></tr>{/notempty}
         </tbody>
        </table>
        </form>
                    </div></div></div><div class="clearfix"></div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection