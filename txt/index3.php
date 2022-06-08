<!DOCTYPE html>
<html>
<head>
  <title>How to Create textarea into a rich content/text editor using jQuery</title>  
  <script type="text/javascript" src="nicEdit.js"></script>
  <script type="text/javascript">
//<![CDATA[
  bkLib.onDomLoaded(function() {
        new nicEditor({maxHeight : 200}).panelInstance('area');
        new nicEditor({fullPanel : true,maxHeight : 200}).panelInstance('area1');
  });
  //]]>
  </script>
</head>
<body>
<h4>How to Create textarea into a rich content/text editor using jQuery</h4>
<div id="sample">
  <h4>Simple textarea</h4>  
  <textarea name="area" id="area" style="width:70%;height:200px;">
       Some Initial Content was in this textarea
  </textarea>
  <h4>textarea with complete panel</h4>
  <textarea name="area1" id="area1" style="width:70%;height:200px;">
       Some Initial Content was in this textarea
  </textarea>
</div>
</body>
</html>