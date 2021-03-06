{layout name="layout/index" /}
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
        <label for="list_pid" class="control-label col-xs-12 col-sm-2">上级分类:</label>
        <div class="col-xs-12 col-sm-6">
        <select name="list_pid" class="form-control selectpicker" required="" style="width:20%">
        	{volist name="Menus" id="menu"}
			<option value="{$menu['list_id']}"  {if isset($info['list_pid']) && $info['list_pid'] == $menu['list_id']}selected{/if}>{$menu.title_show}</option>
			{/volist}
		</select>
        </div>
    </div>
     <div class="form-group">
        <label for="list_pid" class="control-label col-xs-12 col-sm-2">所属模型:</label>
        <div class="col-xs-12 col-sm-6">
        <select name="list_sid" class="form-control selectpicker" required="" style="width:20%">
		{volist name="model" id="model"}
		<option url="{:admin_url('admin/channel/show',array('id'=>$model['id']))}" value="{$model['id']}" {if isset($info['list_sid']) && $info['list_sid'] == $model['id']}selected{/if}>{$model.title}</option>
		{/volist}
		</select>
        </div>
    </div>    
     <div class="form-group">
        <label for="weigh" class="control-label col-xs-12 col-sm-2">栏目排序:</label>
        <div class="col-xs-12 col-sm-2">
          <input type="text" class="form-control" name="list_oid" value="{$info.list_oid|default=0}"  style=" text-align:center" data-tip="越小越前面">
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="control-label col-xs-12 col-sm-2">栏目名称:</label>
        <div class="col-xs-12 col-sm-6">
        <input type="text" class="form-control" name="list_name" value="{$info.list_name|default=''}" data-rule="required" >
        </div>
    </div> 
    <div class="form-group">
        <label for="name" class="control-label col-xs-12 col-sm-2">栏目拼音:</label>
        <div class="col-xs-12 col-sm-6">
        <input type="text" class="form-control" name="list_dir" value="{$info.list_dir|default=''}" data-tip="留空则自动转为拼音" >
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="control-label col-xs-12 col-sm-2">栏目图标:</label>
        <div class="col-xs-12 col-sm-6">
        <input type="text" class="form-control" name="list_ico" value="{$info.list_ico|default=''}" >
        </div>
    </div>     
    <div id="contents">
    {notempty name="$info.template_list_skin"}
    <div class="form-group" id="list_skin">
        <label for="name" class="control-label col-xs-12 col-sm-2">栏目列表模版:</label>
        <div class="col-xs-12 col-sm-6">
        <input type="text" class="form-control" name="list_skin" value="{$info.list_skin|default=''}" >
        </div>
    </div>
    {/notempty}
    {notempty name="$info.template_list_type"}
    <div class="form-group" id="list_skin_type">
        <label for="name" class="control-label col-xs-12 col-sm-2">栏目筛选模版:</label>
        <div class="col-xs-12 col-sm-6">
        <input type="text" class="form-control" name="list_skin_type" value="{$info.list_skin_type|default=''}" >
        </div>
    </div>
    {/notempty}
    {notempty name="$info.template_list_detail"}
    <div class="form-group" id="list_skin_detail">
        <label for="name" class="control-label col-xs-12 col-sm-2">栏目内容模版:</label>
        <div class="col-xs-12 col-sm-6">
        <input type="text" class="form-control" name="list_skin_detail" value="{$info.list_skin_detail|default=''}">
        </div>
    </div>
    {/notempty}
    {notempty name="$info.template_list_play"}     
    <div class="form-group" id="list_skin_play">
        <label for="name" class="control-label col-xs-12 col-sm-2">栏目播放模版:</label>
        <div class="col-xs-12 col-sm-6">
        <input type="text" class="form-control" name="list_skin_play" value="{$info.list_skin_play|default=''}" >
        </div>
    </div>
    {/notempty}
    {eq name="info['list_sid']" value="9"} 
    <div class="form-group" id="list_jumpurl">
        <label for="name" class="control-label col-xs-12 col-sm-2">URL外部链接:</label>
        <div class="col-xs-12 col-sm-6">
        <input type="text" class="form-control" name="list_jumpurl" value="{$info.list_jumpurl|default=''}" data-tip="栏目跳转连接">
        </div>
    </div>
    {/eq} 
    {eq name="info['list_sid']" value="1"} 
       <div class="form-group">
            <label for="name" class="control-label col-xs-12 col-sm-2">影片权限:</label>
                <div class="col-xs-6 col-sm-2">
                    <select name="list_vipplay" class="form-control">
                        <option value="0">免费点播</option>
                        <option value="1" {eq name="info.list_vipplay" value="1" }selected{/eq}>会员点播</option>
<!--                    <option value="2" {eq name="info.list_vipplay" value="2" }selected{/eq}>VIP点播</option>-->
                        <option value="3" {eq name="info.list_vipplay" value="3" }selected{/eq}>微信扫码</option>
                    </select>
                </div>
                </div>
 <!--       <div class="form-group">
        <label for="content" class="control-label col-xs-12 col-sm-1">点播付费:</label>
        <div class="col-xs-12 col-sm-2">
         <input type="text" name="list_pay"  value="{$info.list_pay|default=''}" class="form-control" style="width:80px;text-align:center" data-tip="影币数量">
        </div>
            </div> -->           
            
        <div class="form-group" id="trysee" {notempty name="info.list_vipplay"}style="display:block"{else/}style="display:none"{/notempty}>
         <label for="name" class="control-label col-xs-12 col-sm-2">试看时间:</label>
        <div class="col-xs-6 col-sm-1">
         <input type="text" name="list_trysee"  value="{$info.list_trysee}" class="form-control" style="width:80px;text-align:center" data-tip="试看时间单位分钟">
        </div>
            </div>             
    {/eq}     
    {neq name="info['list_sid']" value="9"}                        
    <div class="form-group">
        <label for="name" class="control-label col-xs-12 col-sm-2">栏目SEO标题:</label>
        <div class="col-xs-12 col-sm-6">
        <input type="text" class="form-control" name="list_title" value="{$info.list_title|default=''}" data-tip="用于栏目的标题">
        </div>
    </div>
     <div class="form-group">
        <label for="name" class="control-label col-xs-12 col-sm-2">栏目SEO关键词:</label>
        <div class="col-xs-12 col-sm-6">
        <input type="text" class="form-control" name="list_keywords" value="{$info.list_keywords|default=''}" data-tip="用于栏目SEO关键词">
        </div>
    </div>
     <div class="form-group">
        <label for="name" class="control-label col-xs-12 col-sm-2">栏目SEO描述:</label>
        <div class="col-xs-12 col-sm-6">
        <textarea class="form-control" id="list_description" name="list_description" value="{$info.list_description|default=''}">{$info.list_description|default=''}</textarea>
        </div>
    </div>  
    {/neq}
    </div>
               <div class="form-group">
                <label for="content" class="control-label col-xs-12 col-sm-2">状态:</label>
                <div class="col-xs-12 col-sm-6">
                    <select name="list_status" class="form-control selectpicker" style="width:65px;">
                        <option value="1">显示</option>
                        <option value="0" {eq name="info.list_status" value="0" }selected{/eq}>隐藏</option>
                    </select>
                </div>
            </div> 
            {notempty name="info.list_id"}
             <input type="hidden" name="list_id" value="{$info['list_id']|default=''}">
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