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
          <div style="text-align: center">
          <h2>Request A Quote</h2>
<form name="contactform" method="post" action="scripts/send_quote_email.php">

    <table align="center" width="475px">
        <tr height="20px">
            <td width="85px">
                <label for="first_name">First Name *</label>
            </td>
            <td valign="top">
                <input type="text" name="first_name" maxlength="50" size="30">
                <tr>
                    <td valign="top">
                        <label for="last_name">Last Name *</label>
                    </td>
                    <td valign="top">
                        <input type="text" name="last_name" maxlength="50" size="30">
                        <tr>
                            <td valign="top">
                                <label for="email">Email Address *</label>
                            </td>
                            <td valign="top">
                                <input type="text" name="email" maxlength="80" size="30">
                                <tr>
                                    <td valign="top">
                                        <label for="telephone">Telephone Number</label>
                                    </td>
                                    <td valign="top">
                                        <input type="text" name="telephone" maxlength="30" size="30">
                                        <tr>
                                            <td colspan="2">
                                                 <h3>Address (Optional)</h3>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="street">Street line 1:</label>
                                            </td>
                                            <td>
                                                <input type="text" name="street" maxlength="40" size="35">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="street2">Street line 2:</label>
                                            </td>
                                            <td>
                                                <input type="text" name="street2" maxlength="40" size="35">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="city">City:</label>
                                            </td>
                                            <td>
                                                <input type="text" name="city" maxlength="30" size="35">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <label for="state">State: &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
                                                <input type="text" name="" maxlength="30" size="16">
                                                <label for="zip">&nbsp; Zip Code:</label>
                                                <input type="text" name="" maxlength="5" size="5">
                                                <tr>
                                                    <td colspan="2" valign="top">
                                                        <label for="model"> Model Number of Machine:
        <input type="text" name="model" maxlength="40" size="40"></label></td></tr><tr>
                                                                <td valign="top"><br>
                                                                    <label for="comments">Comments *</label>
                                                                </td>
                                                                <td valign="top">Please provide more details .<br>
                                                                    <textarea name="comments" maxlength="1000" cols="40" rows="6"></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" style="text-align:center">
                                                                    <input type="submit" value="Submit"> 

                                                                </td>
                                                            </tr>
    </table>
</form>
 
</form></div>
        </article>
     <!-- Footer Start -->
        <?php include 'footer.php'; ?>
     <!-- Footer End ---->
    </div>
</body>
</html>