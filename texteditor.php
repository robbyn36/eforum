<html lang="en">
  <head>
  <script src="editor/tinymce.min.js"></script>
 <script>
    tinymce.init({selector:"textarea.editme",
    theme: "modern",
    plugins: 
     "advlist, autoresize, autosave, bbcode, code,  autolink, lists, link, image, charmap, print, preview, hr, anchor, pagebreak, searchreplace, wordcount, visualblocks, visualchars, code, fullscreen, insertdatetime, media, nonbreaking, save, table, contextmenu, directionality, emoticons, template, paste, pagebreak,  textcolor",
    toolbars: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print | preview | media | forecolor backcolor emoticons",
    image_advtab: true,
    templates: [
     {title: 'Test template 1', content: 'Test 1'},
     {title: 'Test template 2', content: 'Test 2'}
    ]
   });
 </script>
  </head>

  <body>
 <table width="100%" border="0" cellspacing="0" cellpadding="4">
    <tr>
   <td></td>
   <td valign="top">: 
   <textarea class="editme">INI MENGGUNAKAN EDITOR TINYMCE</textarea></td>
 </tr>
 <tr>
      <td>&nbsp;</td>
      <textarea>INI TIDAK PAKAI EDITOR</textarea></td>
    </tr>
  </table>
  </body>
</html>