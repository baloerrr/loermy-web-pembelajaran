const pertanyaan = document.querySelector('#question');
const pilgan = Array.from(document.querySelectorAll('.pilgan-text'));
const teksProgres = document.querySelector('#progressText');
const teksScore =  document.querySelector('#score');
const timer = document.querySelector('#timer');

let currentPertanyaan = {};
let jawabanDiterima = false;
let skor = 0;
let penghitungPertanyaan = 0;
let pertanyaanTersedia = [];
let secondsLeft = 0;
let minutesLeft = 10;

let kumpulanPertanyaan = [
    {
        pertanyaan: "Javascript adalah …",
        choice1 : "Javascript adalah bahasa pemrograman yang awalnya dirancang untuk berjalan di atas browser.",
        choice2 : "Javascript adalah bahasa pemrograman yang awalnya dirancang untuk server side.",
        choice3 : "Javascript adalah bahasa markup yang awalnya dirancang untuk berjalan di atas browser.",
        choice4 : "Javascript adalah bahasa stylesheet yang awalnya dirancang untuk berjalan di atas browser.",
        jawaban : 1
    },
    {
        pertanyaan: "Pilih penulisan Javascript yang benar…",
        choice1 : "Embed",
        choice2 : "Insternal",
        choice3 : "Linker",
        choice4 : "on-line",
        jawaban: 1
    },
    {
        pertanyaan: "Pilih yang mana penulisan variabel yang benar…",
        choice1 : "Judul situs yang dibuat",
        choice2 : "tanggal dibuatnya file html",
        choice3 : "lokasi html yang dibuat",
        choice4 : "lokasi file css yang dibuat",
        jawaban: 1
    }, 
    {
        pertanyaan: "Kita dapat menambahkan sintak javascript dalam dokumen HTML pada bagian…",
        choice1 : "Di dalam tag <head>",
        choice2 : "Di dalam tag <body>",
        choice3 : "Bisa di dalam tag <head> maupun<body>",
        choice4 : "Tidak bisa keduanya",
        jawaban: 3
    }, 
    {
        pertanyaan: "Berikut sintak yang benar untuk menulis kalimat Hello World…",
        choice1 : "document.line(“Hello World”)",
        choice2 : "document.show(“Hello World”)",
        choice3 : "document.alert(“Hello World”)",
        choice4 : " document.write(“Hello Worlf”)",
        jawaban: 4
    }, 
    {
        pertanyaan: "Berikut sintak yang benar untuk membuat komentar pada Javascript… ",
        choice1 : "background-color",
        choice2 : "color:",
        choice3 : "color-background:",
        choice4 : "background-colour:",
        jawaban: 1
    }, 
    {
        pertanyaan: "untuk membuat teks posisinya berada di kiri, property css yang digunakan adalah…",
        choice1 : "<!–ini komentar–>",
        choice2 : "*ini komentar*",
        choice3 : "//ini komentar",
        choice4 : "/* ini komentar */",
        jawaban: 3
    }, 
    {
        pertanyaan: "Perintah di javascript yang berfungsi untuk menampilkan data/informasi dalam bentuk POP UP adalah…",
        choice1 : "show()",
        choice2 : "alert()",
        choice3 : "write()",
        choice4 : "pop_up()",
        jawaban: 2
    }, 
    {
        pertanyaan: "Berikut adalah cara pembuatan array yang benar di javascript…",
        choice1 : "mahasiswa = [‘Rini’,’Aldi’,’Acep’,’Putra’]",
        choice2 : "mahasiswa = {‘Rini’,’Aldi’,’Acep’,’Putra’}",
        choice3 : "mahasiswa = (‘Rini’,’Aldi’,’Acep’,’Putra’)",
        choice4 : "mahasiswa = ‘Rini’,’Aldi’,’Acep’,’Putra’",
        jawaban: 1
    }, 
    {
        pertanyaan: "Bagaimana membuat perulangan for di javascript?",
        choice1 : "for (i<=10)",
        choice2 : "for (i=1;i<=10)",
        choice3 : "for (i=1;i<=10;i++)",
        choice4 : "for (i=1;i<=10;i++) then",
        jawaban: 3
    }, 
];

const SCORE_POINTS = 100;
const MAX_QUESTIONS = 10;

function startTimer() {
    timer.textContent = `${minutesLeft}:${secondsLeft}`;
    let timeInterval = setInterval( () => {
        secondsLeft--;
        timer.textContent = `${minutesLeft}:${secondsLeft}`;
        if(secondsLeft < 10) {
            timer.textContent = `${minutesLeft}:0${secondsLeft}`
            if (secondsLeft <= 0) {
                secondsLeft = 59;
                minutesLeft = minutesLeft - 1;
                timer.textContent = `${minutesLeft}:${secondsLeft}`
                
                if(minutesLeft < 0) {
                    clearInterval(timeInterval)
                    localStorage.setItem('recentScore', skor);
                    return window.location.assign("end-html-quiz.php")

                }
            }
        }
    },1000)
}

function startGame() {
    penghitungPertanyaan = 0;
    skor = 0;
    pertanyaanTersedia = [...kumpulanPertanyaan];
    startTimer();
    getNewQuestion();
}
startGame()

function getNewQuestion() {
    if(pertanyaanTersedia.length === 0 || penghitungPertanyaan > MAX_QUESTIONS) {
        localStorage.setItem('mostRecentScore', skor)
        return window.location.assign('end-html-quiz.php')
    }

    penghitungPertanyaan++;
    teksProgres.innerText = `${penghitungPertanyaan}/${MAX_QUESTIONS}`;
    
    const indexPertanyaan = Math.floor(Math.random() * pertanyaanTersedia.length);
    currentPertanyaan = pertanyaanTersedia[indexPertanyaan];
    pertanyaan.innerText = currentPertanyaan.pertanyaan;

    pilgan.forEach(pilihanGanda => {
        const number = pilihanGanda.dataset['number'];
        pilihanGanda.innerText = currentPertanyaan[`choice${number}`]
    });

    pertanyaanTersedia.splice(indexPertanyaan, 1)

    jawabanDiterima = true;
}

pilgan.forEach(pilihanGanda => {
    pilihanGanda.addEventListener('click', e => {
        if(!jawabanDiterima) return;

        jawabanDiterima = false
        const selectedPilgan = e.target;
        const selectedJawaban = selectedPilgan.dataset['number'];

        let classToApply = selectedJawaban == currentPertanyaan.jawaban ? 'correct' : 'incorrect';

        if(classToApply === 'correct') {
            incrementScore(SCORE_POINTS);
        }

        selectedPilgan.parentElement.classList.add(classToApply);

        setTimeout(() => {
            selectedPilgan.parentElement.classList.remove(classToApply);
            getNewQuestion()
        }, 1000)
    });
});

function incrementScore(nums) {
    skor += nums;
    teksScore.innerText = skor;
}