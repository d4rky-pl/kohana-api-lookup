$(function()
{

	API_Lookup = {

		'_prepare_api_box': function() {
			if($("#api").length == 0)
			{
				$(".box.search").after('<div id="api"/>');
			}

			API_Lookup.api_box = $("#api");
		},

		'_prepare_autocomplete': function() {
			$("#query").autocomplete({
				source: location.href,
				minLength: 3,
				select: function (event, ui)
				{
					API_Lookup.api_box.html('<div id="loading"/>');
					$.get(location.href, { 'query': ui.item.value }, function(data)
					{
						API_Lookup.api_box.html(data); 
						API_Lookup._prepare_syntax_highlighter();
					});

				}
			}).click(function() { $(this).select(); });
		},

		'_prepare_syntax_highlighter': function() {
			$('pre:not(.debug) code').each(function()
			{
				$(this).addClass('brush: php, class-name: highlighted');
				SyntaxHighlighter.highlight({'gutter': false}, this);
			});
		},


		'init': function()
		{
			API_Lookup._prepare_api_box();
			API_Lookup._prepare_autocomplete();
			API_Lookup._prepare_syntax_highlighter();
		}
	};

	API_Lookup.init();

});
