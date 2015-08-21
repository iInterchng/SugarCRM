<?php /* Smarty version 2.6.11, created on 2014-05-08 12:13:14
         compiled from themes/Sugar/tpls/footer.tpl */ ?>
<!--end body panes-->
		</td>
		</tr>
	  </table>
    </div>
    <div class="clear"></div>
</div>
<div id="bottomLinks">
<?php if ($this->_tpl_vars['AUTHENTICATED']):  echo $this->_tpl_vars['BOTTOMLINKS']; ?>

<?php endif; ?>
</div>
<div id="footer" style='display:none'>
    <?php echo $this->_tpl_vars['STATISTICS']; ?>

    <div id="copyright" style='display:none'>
        <?php echo $this->_tpl_vars['COPYRIGHT']; ?>

    </div>
</div>
<div id="footer" >
 <a href="http://ecrm.co.in" target="_blank" class="copyRightLink">ECRM Solutions</a> <br>
</div>
<script>
<?php echo '
if(SUGAR.util.isTouchScreen()) {
	setTimeout(resizeHeader,10000);
}
'; ?>

</script>

</body>
</html>