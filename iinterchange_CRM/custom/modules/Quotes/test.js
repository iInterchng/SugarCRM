function check_custom_data()
{
    alert("hi in Field");

    //var salestype =document.getElementById('producttype_c').value;
    //var po =parseInt(document.getElementById('po_qty_c').value);

    //var inward =parseInt(document.getElementById('inward_qty_c').value);
    //var inward1 =document.getElementById('inward_qty_c').value;
    //var outward =parseInt(document.getElementById('outward_qty_c').value);
    //var outward1 =document.getElementById('outward_qty_c').value;
    //var accepted =parseInt(document.getElementById('accepted_qty_c').value);
    //var accepted1 =document.getElementById('accepted_qty_c').value;
    //alert(parseFloat(reqd1));
    //alert("hi in Field1");
    //alert(po);
    if (document.getElementById('pymentterm_c').value =='Net 30')
    {
       alert('In SERVICES');
       

        var ed = tinyMCE.get('terms_c');
        ed.setProgressState(1); // Show progress
        window.setTimeout(function() {
            ed.setProgressState(0); // Hide progress
            ed.setContent('<p style="text-align: center;"><strong><br /><span   style="font-size: small;">General Manager&#39;s Corner</span></strong></p><p style="text-align: center;">August&nbsp;2009</p><p>It&rsquo;s been  15<sup>th</sup> and so have a Steak Night (Saturday, 15<sup>th</sup>) and a shore Dinner planned (Saturday, 22<sup>nd</sup>) this month. urday, September 5<sup>th</sup>. e a can&rsquo;t missed evening, shas extended it one additional week. The last clinic will be the week of August 11<sup>th</sup>. </p><p>&nbsp;Alt (Tuesday through Thursday) </p><p>&nbsp;I wouClub.</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;<strong></strong></p>');
        }, 1);

       
       
       //var textbox = document.getElementsByName('terms_c')[0];
       //textbox.html('selected_article_title');
       //$('terms_c').html('selected_article_title');
      // var editor = tinymce.get(textbox); // use your own editor id here - equals the id of your textarea
       //var content = editor.getContent();
       //content = content.replace(/{\$baseurl}/g, 'http://mydomain.com');
       //editor.setContent(content);
       //var textbox = document.getElementsByName('terms_c').value;
       //var newtext = document.myform.inputtext.value;
       //tinymce.get(textbox);
       //textbox.value;
        //textbox.html("someText");
        //document.getElementById('terms_c').remove;
        //document.tinymce.get('terms_c').setcontent('<p>This is my new content!</p>');
        //document.getElementsByName('terms_c')[0].setcontent('<p>This is my new content!</p>');
         //alert(textbox);
        return false;
    }





    return check_form('EditView');
}



