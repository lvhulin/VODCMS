{layout name="layout/index" /}
<div class="panel panel-default panel-intro" style="background:#FFF;">
     <div class="panel-body is-dialog">
   <form id="edit-form" class="edit-form form-horizontal" role="form" method="post" action="{:admin_url('admin/vod/mcid_post')}">
    <ul style="padding:0 10px 0 10px; line-height:25px;">
    {notempty name="data.listmcid"}
    {volist name="data.listmcid" id="vo"}
     <span style=" margin-right:10px;display:block; float:left"><input style="border:none;width:auto; margin-bottom:3px;margin-right:5px;position:relative; top:2px;" type="checkbox"  name="vod_mcids[]"   value="{$vo.m_cid}"{if in_array($vo['m_cid'],$data.mcids)}checked="checked"{/if} /> {$vo.m_name}</span>
     {/volist}
     {else/}
     <div style="width:100%; text-align:center">暂无类型请线到类型管理中添加</div>
     {/notempty}
     </ul>    
    {notempty name="data.voddata.vod_id"} 
    <input type="hidden" name="vod_id" value="{$data.voddata['vod_id']|default=''}"> 
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