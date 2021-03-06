  {notempty name="template_list_skin"}
   <div class="form-group">
        <label for="name" class="control-label col-xs-12 col-sm-2">栏目列表模版:</label>
        <div class="col-xs-12 col-sm-6">
        <input type="text" class="form-control" name="list_skin" value="{$template_list_skin|default=''}" >
        </div>
    </div>
   {/notempty} 
   {notempty name="template_list_type"} 
    <div class="form-group">
        <label for="name" class="control-label col-xs-12 col-sm-2">栏目筛选模版:</label>
        <div class="col-xs-12 col-sm-6">
        <input type="text" class="form-control" name="list_skin_type" value="{$template_list_type|default=''}" >
        </div>
    </div>
    {/notempty} 
    {notempty name="template_list_detail"}
    <div class="form-group">
        <label for="name" class="control-label col-xs-12 col-sm-2">栏目内容模版:</label>
        <div class="col-xs-12 col-sm-6">
        <input type="text" class="form-control" name="list_skin_detail" value="{$template_list_detail|default=''}" >
        </div>
    </div> 
    {/notempty} 
    {notempty name="template_list_play"}    
    <div class="form-group">
        <label for="name" class="control-label col-xs-12 col-sm-2">栏目播放模版:</label>
        <div class="col-xs-12 col-sm-6">
        <input type="text" class="form-control" name="list_skin_play" value="{$template_list_play|default=''}" >
        </div>
    </div>
    {/notempty} 
    {eq name="id" value="9"} 
    <div class="form-group">
        <label for="name" class="control-label col-xs-12 col-sm-2">URL外部链接:</label>
        <div class="col-xs-12 col-sm-6">
        <input type="text" class="form-control" name="list_jumpurl" value="{$info.list_jumpurl|default=''}" data-tip="栏目跳转连接">
        </div>
    </div> 
 {/eq}  
    {eq name="id" value="1"} 
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
     {neq name="id" value="9"}                        
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