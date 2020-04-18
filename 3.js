// jalanin lewat console, bukan debug
function cetak_gambar(target) {
    let pattern1 = "* ";
    let pattern2 = "= ";

    for (let row = 1; row <= target; row++) {

        for (let column = 1; column <= target; column++) {
            if (row === 1 || column === 1 || row === target || column === target || row === target / 2 + 0.5) {
                process.stdout.write(pattern1);
            }
            else {
                process.stdout.write(pattern2);
            }
        }
        console.log("");
    }
}
cetak_gambar(5);