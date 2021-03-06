@extends('admin.layout.default')
@section('content')
<div class="panel panel-default panel-intro">
{notempty name="nav_title.title"}
    <div class="panel-heading">
        <div class="panel-lead">
            <em>{$nav_title.title}</em>{$nav_title.remark}
        </div>
    </div>
{/notempty} 
     <div class="panel-body is-dialog">
    <form id="edit-form" class="edit-form form-horizontal" role="form" method="post">
    
      <div class="form-group">
        <label for="list_pid" class="control-label col-xs-12 col-sm-2">所属分类:</label>
        <div class="col-xs-12 col-sm-6">
        <select name="m_list_id" class="form-control selectpicker" required="" style="width:20%">
{volist name="list_tree" id="list"}
		<option value="{$list['list_id']}" {if isset($info['m_list_id']) && $info['m_list_id'] == $list['list_id']}selected{/if}>{$list.list_name}</option>
						{/volist}
		</select>
        </div>
    </div>  
     <div class="form-group">
        <label for="name" class="control-label col-xs-12 col-sm-2">类型名称:</label>
        <div class="col-xs-12 col-sm-6">
        <input type="text" class="form-control" name="m_name" value="{$info.m_name|default=''}" data-rule="required" style="text-align:center">
        </div>
    </div> 
      <div class="form-group">
        <label for="weigh" class="control-label col-xs-12 col-sm-2">类型排序:</label>
        <div class="col-xs-12 col-sm-2">
          <input type="text" class="form-control" name="m_order" value="{$info.m_order|default=0}"  style=" text-align:center" data-tip="越小越前面">
        </div>
    </div>    
                    {notempty name="info.m_cid"}
                    <input type="hidden" name="m_cid" value="{$info['m_cid']|default=''}">
                    {/notempty}
     <div class="form-group hidden layer-footer">
      <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled">确定</button>
            <button type="reset" class="btn btn-default btn-embossed">重置</button>
            <button type="reset" class="btn btn-primary btn-embossed btn-close" onclick="Layer.closeAll();"> 关闭</button>
        </div>
    </div>
</form>
            </div>
            </div>
@endsection
