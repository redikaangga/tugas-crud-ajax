if(window.jQuery){
	console.log('jQuery berjalan');
}
else{
	console.log('jQuery tidak ada');
}

function tampil() {
	var cari = $("#cari").val();

	$.ajax ({
		method: "GET",
		url: "list-data.php",
		data: "q="+cari
	})
	.done(function(data) {
		$("#list-data").html(data);
	})
}

$(document).on("click", ".hapus", function(){
	var id_pegawai = $(this).attr("data-id");//serialize = ambil semua yang ada di form
	// alert(id_pegawai);

	$.ajax ({
		method: "GET",
		url: "delete.php",
		data: "id="+id_pegawai
	})
	.done(function(data){
		tampil();
		alert("Data Terhapus");
		// console.log(msg);
	});
	e.preventDefault();
});

$("#cari").keyup(function() {
	tampil();
})

window.load = tampil();