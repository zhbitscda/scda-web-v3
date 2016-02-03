function Checklogin()
{
	if (myform.id.value=="")
	{
		alert("请填写登录名");
		myform.id.focus();
		return false;
	}
	if (myform.pw.value=="")
	{
		alert("密码不能为空");
		myform.pw.focus();
		return false;
	}
}