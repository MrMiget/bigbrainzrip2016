<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title>Edit a Pilot School</title>
	<style type="text/css" media="all">@import "PilotIncludes/layout.css";</style>
</head>
<body>
<div id="wrapper"><!-- Goes with the CSS layout. -->

	<div id="content"><!-- Goes with the CSS layout. -->

		<div id="nav"><!-- Links section -->
			<h3>Menu</h3>
			<ul>
			<li class="navtop"><a href="PilotReport.php" title="Go to Main Report Page">Main</a></li>
			<li><a href="PilotAddForm.php" title="Add New Pilot School">Add</a></li>
			</ul>
		</div>
		<!-- Script 7.1 - header.html -->
		<!-- Start of page-specific content. -->
<p align="center">Pilot School Add Form</p>
<form id="form1" name="form1" method="post" action="PilotAddFunction.php">
  <table width="600" border="0" align="center">
    <tr> 
      <td><label>Contact 
        <input type="text" name="Contact" value="" />
        </label></td>
      <td><label>Title 
        <input type="text" name="Title" value="" />
        </label></td>
    </tr>
    <tr> 
      <td><label>email 
        <input type="text" name="email" value="" />
        </label></td>
      <td><label>Phone 
        <input type="text" name="Phone" value="" />
        </label></td>
    </tr>
    <tr> 
      <td>District 
        <input type="text" name="District" value="" /> </td>
      <td>School 
        <input type="text" name="School" value="" /> </td>
    </tr>
    <tr> 
      <td><label>Address 
        <input type="text" name="Address" value="" />
        </label></td>
      <td><label>CityStateZip 
        <input type="text" name="CityStateZip" value="" />
        </label></td>
    </tr>
    <tr> 
      <td><label>Country 
        <input type="text" name="Country" value="" />
        </label></td>
      <td><label>TotalDays 
        <input type="text" name="TotalDays" value="30" />
        </label></td>
    </tr>
	<tr> 
      <td colspan="2"><label>OS 
        <input type="text" name="OS" value="" />
        </label> <label></label></td>
    </tr>
    <tr> 
      <td colspan="2"><label>Comments 
        <input type="text" name="Comments" value="" />
        </label> <label></label></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2"><div align="center"> 
          <input type="submit" name="Submit" value="Add Pilot School">
        </div></td>
    </tr>
  </table>
</form>
		<!-- End of page-specific content. -->
	</div><!-- End of "content" DIV. -->
	
	<div id="footer"><p>&copy; Copyright 2007 Big Brainz, Inc.</p></div>
	
</div><!-- End of "wrapper" DIV. -->
</body>
</html>