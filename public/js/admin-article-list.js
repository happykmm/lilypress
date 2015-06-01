

function article_retrieve(id) {
	$.get($("#url_admin").val()+"/article/retrieve/"+id,
	function (data, status) {
		location.reload(true);
	});
}

function article_delete(id) {
	$.get($("#url_admin").val()+"/article/delete/"+id,
	function (data, status) {
		location.reload(true);
	});
}


