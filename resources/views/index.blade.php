@extends('layout/main')

@section('title','index')

@section('container')
<div class="container mt-4 ">
    <div>
        <div>
            <h1 class="text-center">Zakat Mal</h1>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div>
            <div class="text-center">
                <img src="zakat.jpg">
            </div>
            <br>
            <div class="text-justify">
                <h5>Apa Itu Zakat Mal ?</h5>
                <p>
                    Zakat Mal atau zakat profesi (al-mal al-mustafad) 
                    adalah zakat yang dikenakan pada setiap pekerjaan atau 
                    keahlian profesional tertentu, baik yang dilakukan sendirian 
                    maupun bersama dengan orang/lembaga lain, yang mendatangkan penghasilan (uang) halal yang memenuhi nisab 
                    (batas minimum untuk wajib zakat), jumlah nisab zakat mal yakni setara dengan 520kg
                    <a href="https://ekonomi.bisnis.com/read/20200701/12/1260016/panen-raya-berlalu-harga-gabah-dan-beras-mulai-naik">gabah</a>.
                </p>
                <h5>Dasar Hukum Zakat Mal</h5>
                <p>
                    Mayoritas ulama mazhab empat tidak mewajibkan zakat penghasilan pada saat menerima kecuali sudah mencapai nisab dan 
                    sudah sampai setahun (haul), namun para ulama mutaakhirin seperti Syekh Abdurrahman Hasan, Syekh Muhammad Abu Zahro, 
                    Syekh Abdul Wahhab Khallaf, Syekh Yusuf Al Qardlowi, Syekh Wahbah Az-Zuhaili, hasil kajian majma' fiqh dan fatwa MUI 
                    nomor 3 tahun 2003 menegaskan bahwa zakat penghasilan itu hukumnya wajib. Hal ini mengacu pada pendapat sebagian sahabat 
                    (Ibnu Abbas, Ibnu Masud dan Mu'awiyah), Tabiin (Az-Zuhri, Al-Hasan Al-Bashri, dan Makhul) juga pendapat Umar bin Abdul Aziz 
                    dan beberapa ulama fiqh lainnya. (Al-fiqh Al-Islami wa ‘Adillatuh, 2/866).
                </p>
                <p>
                    Dan juga berasal dari firman Allah SWT. dalam Q.S. At-Taubah 9:103 yang artinya : 
                    ""... Ambilah olehmu zakat dari sebagian harta mereka, dengan zakat itu kamu membersihkan dan mensucikan mereka..."" (Q.S.At-Taubah 9:103), dan Q.S. Al-Baqarah 2:267 : 
                    "Hai orang-orang yang beriman, nafkahkanlah sebagian dari hasil usahamu yang baik-baik..." (Q.S.Al-Baqarah 2:267).
                </p>
            </div>
        </div>
    </div>
</div>
<br>

<!-- @if(session('info'))
     <div class="alert alert-info">
        {{ session('info') }}
    </div>
@endif -->

 

@endsection