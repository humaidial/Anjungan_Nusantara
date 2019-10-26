// Enable pusher logging - don't include this in production
// Pusher.logToConsole = true;

var pusher = new Pusher('07266be1b2356948225a', {
  cluster: 'ap1',
  forceTLS: true
});

var channel = pusher.subscribe('my-channel');
channel.bind('new_penjual', function(data) {

if(data.akun_butuh_verifikasi == "1"){
    // alert(data.akun_butuh_verifikasi);
    var jum = document.getElementById("jumlah_notif").innerHTML;
    var jumlah = Number(jum) + 1;
    document.getElementById("jumlah_notif").innerHTML = jumlah;

     document.getElementById("container_notif").innerHTML +=  
    "<a class='list-group-item dropdown-item' href='<?php echo base_url()?>Admin/akun/Penjual' role='menuitem'><div class='media'><div class='pr-10'><i class='icon wb-user bg-green-600 white icon-circle' aria-hidden='true'></i></div> <div class='media-body'> <h6 class='media-heading'>Beberapa akun penjual menunggu verifikasi.</h6><span class='badge badge-round badge-danger' id='notif_penjual'>1</span></div></div></a>";
}
else{
    document.getElementById('notif_penjual').innerHTML = data.akun_butuh_verifikasi;
}

});