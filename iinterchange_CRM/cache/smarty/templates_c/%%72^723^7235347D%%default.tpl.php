<?php /* Smarty version 2.6.11, created on 2014-05-08 12:30:44
         compiled from modules/Connectors/connectors/formatters/ext/rest/twitter/tpls/default.tpl */ ?>
{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************
* Description:
* Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights
* Reserved. Contributor(s): contact@synolia.com - www.synolia.com
* *******************************************************************************/
*}
<div style="visibility:hidden;" id="twitter_popup_div"></div>
<script src="http://widgets.twimg.com/j/2/widget.js" type="text/javascript"></script>
<script type="text/javascript" src="{sugar_getjspath file='include/connectors/formatters/default/company_detail.js'}"></script>
<script type="text/javascript">
function show_ext_rest_twitter(event)
{literal} 
{
    var xCoordinate = event.clientX;
    var yCoordinate = event.clientY;
    var isIE = document.all?true:false;
      
    if(isIE) 
    {
        xCoordinate = xCoordinate + document.body.scrollLeft;
        yCoordinate = yCoordinate + document.body.scrollTop;
    }

{/literal}

    cd = new CompanyDetailsDialog("twitter_popup_div", '<div id="twitter_div" name="twitter_div">' + SUGAR.language.get('app_strings', 'LBL_TWITTER_DATA_LOADING') + '</div>', xCoordinate, yCoordinate);
    cd.setHeader("{$fields.<?php echo $this->_tpl_vars['mapping_name']; ?>
.value|trim}");
    cd.display();

    mapping_name_value = "{$fields.<?php echo $this->_tpl_vars['mapping_name']; ?>
.value|trim}";

    if (mapping_name_value.length > 0) 
    {ldelim}
        twitter_popup = new TWTR.Widget({literal}{
          id: 'twitter_div',
          version: 2,
          type: 'profile',
          rpp: 4,
          interval: 6000,
          width: 250,
          height: 300,
          theme: {
            shell: {
              background: '#ffffff',
              color: '#000000'
            },
            tweets: {
              background: '#ffffff',
              color: '#000000',
              links: '#0b578f'
            }
          },
          features: {
            scrollbar: true,
            loop: false,
            live: true,
            hashtags: true,
            timestamp: true,
            avatars: false,
            behavior: 'all'
          }
        }{/literal}).render().setUser('{$fields.<?php echo $this->_tpl_vars['mapping_name']; ?>
.value}').start();
    {rdelim} 
    else 
    {ldelim}
        document.getElementById('twitter_div').innerHTML = SUGAR.language.get('app_strings', 'LBL_TWITTER_DATA_EMPTY');
    {rdelim}
{rdelim}
</script>