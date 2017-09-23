$(document).ready(function($)
{
	var i = 1;

	$('body').keypress(function(e)
	{
		if(e.keyCode == 13)
		{
			var texto1 = '.visao'+i;
			var texto2 = '.visao'+(i+1);

			$(texto1).css('display', 'none');
			$(texto2).css('display', 'block');

			i++;

			if(i == 5)
			{
				i = 0;
			}
		}
	});
});