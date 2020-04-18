function hitungKembalian(totalBelanja, uangDiBerikan) {
    let kembalian;
    let lima = 0;
    let sepuluh = 0;
    let duapuluh = 0;
    let limapuluh = 0;

    if (totalBelanja > 200000) {
        let cashBack = totalBelanja * 10 / 100;
        let totalUangDiBerikanTambahCashBack = uangDiBerikan + cashBack;
        kembalian = totalUangDiBerikanTambahCashBack - totalBelanja;
    } else {
        kembalian = uangDiBerikan - totalBelanja;
    }

    while (kembalian >= 5000) {
        if (kembalian >= 50000) {

            limapuluh++;
            kembalian = kembalian - 50000;

        } else if (kembalian >= 20000) {

            duapuluh++;
            kembalian = kembalian - 20000;

        } else if (kembalian >= 10000) {

            sepuluh++;
            kembalian = kembalian - 10000;

        } else if (kembalian >= 5000) {

            lima++;
            kembalian = kembalian - 5000;
        }
    }
    if (limapuluh > 0) {console.log(limapuluh + "x 50000"); }
    if (duapuluh > 0) {console.log(duapuluh + "x 20000");}
    if (sepuluh > 0) {console.log(sepuluh + "x 10000");}
    if (lima > 0) {console.log(lima + "x 5000");}
    if (kembalian > 0) {console.log(kembalian + " Disumbangkan karena tidak ada pecahan dibawah 5000");}

}

hitungKembalian(220000, 250000);