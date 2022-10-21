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
        pertanyaan: "HTML singkatan dari …",
        choice1 : "HyperText Markup Language",
        choice2 : "HidenText Markup Language",
        choice3 : "HyperTide Making Language",
        choice4 : "HyperText Making Language",
        jawaban : 1
    },
    {
        pertanyaan: "Judul Dokumen HTML terletak di antara kode …",
        choice1 : "<body>",
        choice2 : "<title>",
        choice3 : "<bgcolor>",
        choice4 : "<font>",
        jawaban: 2
    },
    {
        pertanyaan: "Isi sebuah dokumen HTML terletak diantara kode …",
        choice1 : "<body>",
        choice2 : "<title>",
        choice3 : "<bgcolor>",
        choice4 : "<font>",
        jawaban: 1
    }, 
    {
        pertanyaan: "Untuk menambahkan warna background kita bisa mengunakan atribute...",
        choice1 : "<..bgcolour=”red”>",
        choice2 : "<…color=”red”>",
        choice3 : "<..bgcolor=”red”>",
        choice4 : "<…colour=”red”>",
        jawaban: 3
    }, 
    {
        pertanyaan: "Atribute untuk merubah ukuran huruf menjadi lima adalah …",
        choice1 : "<..font size=50>",
        choice2 : "<..Text size=50>",
        choice3 : "<..font size=5>",
        choice4 : "<..text size=5>",
        jawaban: 3
    }, 
    {
        pertanyaan: "Untuk membuat tulisan bergerak kekiri kanan atau sebaliknya kode yandigunakan adalah …",
        choice1 : "<marquee>",
        choice2 : "slide",
        choice3 : "scrool",
        choice4 : " left to right",
        jawaban: 1
    }, 
    {
        pertanyaan: "Kode <u> untuk membuat stye teks menjadi …",
        choice1 : "Tebal",
        choice2 : "Garis Bawah",
        choice3 : "Miring",
        choice4 : "Berwarna",
        jawaban: 2
    }, 
    {
        pertanyaan: "Untuk membuat sebuh baris teks turun satu baris, kode yang digunakan adalah …",
        choice1 : "<p>",
        choice2 : "<break>",
        choice3 : "<down>",
        choice4 : "<br>",
        jawaban: 4
    }, 
    {
        pertanyaan: "Kode untuk mengawali sebuah tabel adalah ",
        choice1 : "<table>",
        choice2 : "</tabel>",
        choice3 : "<tabel>",
        choice4 : "</table>",
        jawaban: 1
    }, 
    {
        pertanyaan: "Berikut adalah aplikasi browser untuk menampilkan hasil dokumen HTML…",
        choice1 : "Notepad",
        choice2 : "Google Corona",
        choice3 : "Google Chrome",
        choice4 : "Power Point",
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
            const correctSound = new Audio('../../../src/sound/correctSound.mp3');
            correctSound.play()
            incrementScore(SCORE_POINTS);
        }

        if(classToApply === 'incorrect') {
            const incorrectSound = new Audio('../../../src/sound/wrongSound.mp3');
            incorrectSound.play()
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