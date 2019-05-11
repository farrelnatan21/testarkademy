<script>
		function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		if (nama.length < 8 /^[a-z]+$/) {
    alert('tolong masukan usernama 8 huruf kecil');
    return false;
}
if (nama != "" && password="") {
			return true;
		}else{
			alert('Anda harus mengisi data dengan lengkap !');
		}
	}
	
</script>