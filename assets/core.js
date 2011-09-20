$(function()
{

	API_Lookup = {

		'_prepare_api_box': function() {
			$(".box.search").after('<div id="api"/>');

			API_Lookup.api_box = $("#api");
		},

		'_prepare_autocomplete': function() {
			$("#query").autocomplete({
				source: location.href,
				minLength: 3,
				select: function (event, ui)
				{
					API_Lookup.api_box.html('<div id="loading"/>');
					console.log(ui.item.value);
					$.get(location.href, { 'query': ui.item.value }, function(data)
					{
						API_Lookup.api_box.html(data); 
					});

				}
			}).click(function() { $(this).select(); });
		},

		'init': function()
		{
			API_Lookup._prepare_api_box();
			API_Lookup._prepare_autocomplete();
		}
	};

	API_Lookup.init();

});
