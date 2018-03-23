<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">

<head>
    <!-- META -->
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <!-- META END -->

    <!-- Page title -->
    <title>  National Packaging Equipment and Service  </title>
    <!-- Page title end -->

    <meta name="viewport" content="width=device-width; initial-scale=1">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection">
</head>

<body>
    <!-- Header -->
         <?php include("header.php"); ?>
    <!-- --------->

    <!-- Topbar Navigation --> 
         <?php include 'navigation.php'; ?>
    <!--  -------------------->

    <!-- Slider -->
    <!-- ------ -->  

    <!-- Sidebar Navigation-->
         <?php include 'sidenav.php'; ?>
    <!-- -------------------->
        
        <article id="contents">
          <p> This is a test form only. Please do not use.</p>

<form name="contactform" method="post" action="send_form_email.php">
 
<table width="450px">
 
<tr>
 
 <td valign="top">
 
  <label for="first_name">First Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="first_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="last_name">Last Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="last_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="email">Email Address *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="email" maxlength="80" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="telephone">Telephone Number</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="telephone" maxlength="30" size="30">
 
 </td>
 
</tr>
<tr>
 <label for="model">Model Number of Machine</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="model" maxlength="30" size="30">
 
 </td>
 <tr>
 
<tr>
 
 <td valign="top">
 
  <label for="comments">Comments *</label>
 
 </td>
 
 <td valign="top">
 
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 
 </td>
 
</tr>
 
<tr>
 
 <td colspan="2" style="text-align:center">
 
  <input type="submit" value="Submit">   <a href="email_form.php">Email Form</a>
 
 </td>
 
</tr>
 
</table>
 
</form>
</div>
        </article>
     <!-- Footer Start -->
        <?php include 'footer.php'; ?>
     <!-- Footer End ---->
    </div>
</body>
</html>