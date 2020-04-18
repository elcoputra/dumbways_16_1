function check(dataKey, word) {

    for (let i = 0; i < dataKey.length; i++) {
        let targetScan = dataKey[i];
        let regex = new RegExp(targetScan, "g");
        
        if (word.match(regex)) {
            console.log(targetScan + "=> True");
        } else {
            console.log(targetScan + "=> False");
        }
    }
}

let dataKey = ['dumb', 'ways', 'the', 'best'];
let word = 'dumbways';
check(dataKey, word);