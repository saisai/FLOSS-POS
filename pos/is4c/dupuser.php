<?php
/*******************************************************************************

    Copyright 2001, 2004 Wedge Community Co-op

    This file is part of IS4C.

    IS4C is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    IS4C is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    in the file license.txt along with IS4C; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*********************************************************************************/
$lane = $_GET['lane'];

?>
<BODY onLoad='document.form.reginput.focus();'>
<TABLE border='0' cellpadding='0' cellspacing='0'>
<TR><TD height='40' width='100' valign='center' bgcolor='#FFCC00' align='center'>
<FONT face='arial' size='-1'><B>I S 4 C</B></FONT>
</TD>
<TD height='40' width='540' valign='bottom' align='right'>
<FONT face='arial' size='-2'>
&nbsp; P H P &nbsp; D E V E L O P M E N T &nbsp; V E R S I O N &nbsp; 1.0.0</B></FONT>
</TD>
</TR>

<TR><TD height='1' width='640' colspan='2' bgcolor='black'></TD></TR>
<TR>
<TD height='20' width='100' align='center' bgcolor='#004080'>
<FONT face='aria;' size='-1' color='white'><B>W E L C O M E</B></FONT>
</TD>
<TD></TD>
</TR>
<TR>
<TD height='300' width='640' align='center' colspan='2' valign='center'>
	<TABLE border='0' cellpadding='0' cellspacing='0'>
		<TR>
		<TD bgcolor='#800000' height='150' width='260' valign='center' align='center'>
			<CENTER>
			<BR><FONT face='arial' color='white'>
			<B>log in</B>
			<FORM name='form' method='post' autocomplete='off' action='authenticate.php'>
			<INPUT Type='password' name='reginput' size='20' onBlur='document.form.reginput.focus();'>
			<P><FONT face='arial' color='white'>
			user already logged onto till <? echo $lane; ?></FONT>
			</FORM>
			</FONT></CENTER>

		</TD>
		</TR>
	</TABLE>
</TD></TR>
<TR><TD width='640' colspan='2' align='right'>
<FONT size='-2' face='arial'>E X I T</FONT>

<?

if ($_SESSION["laneno"] >= 9) {
	echo "<A href='javascript:window.top.close();' ";
}
else {
	echo "<A href='bye.html' ";
}
?>

	onMouseOver=document.exit.src='/graphics/switchred2.gif'
	onMouseOut=document.exit.src='/graphics/switchblue2.gif'>

	<IMG name='exit' border='0' src='/graphics/switchblue2.gif'></A>

</TD></TR>
</TABLE>
<FORM name='hidden'>
<INPUT Type='hidden' name='alert' value='noScan'>
</FORM>

</BODY>
