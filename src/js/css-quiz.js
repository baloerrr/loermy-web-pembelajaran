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
        pertanyaan: "Kepanjangan dari CSS adalah…",
        choice1 : "Coloring Style Sheet",
        choice2 : "Cascading Style Sheets",
        choice3 : "Customising Style Sheet",
        choice4 : "Customising Simple Style",
        jawaban : 2
    },
    {
        pertanyaan: "Pada CSS, untuk mengatur jenis tulisan menggunakan property…",
        choice1 : "Font-number",
        choice2 : "Font-size",
        choice3 : "Font-family",
        choice4 : "Font-style",
        jawaban: 3
    },
    {
        pertanyaan: "Untuk menghubungkan HTML dengan External CSS, value dari href harus diisi dengan…",
        choice1 : "Judul situs yang dibuat",
        choice2 : "tanggal dibuatnya file html",
        choice3 : "lokasi html yang dibuat",
        choice4 : "lokasi file css yang dibuat",
        jawaban: 1
    }, 
    {
        pertanyaan: "Berikut ini merupakan jenis CSS, kecuali…",
        choice1 : "Middle CSS",
        choice2 : "Inline CSS",
        choice3 : "Eksternal CSS",
        choice4 : "Internal CSS",
        jawaban: 1
    }, 
    {
        pertanyaan: "p { color: blue; text-align:center }Semua elemen yang ada pada <p> nantinya akan menjadi…",
        choice1 : "Warna : merah, orientasi: tengah",
        choice2 : "Warna : kuning, orientasi: kiri",
        choice3 : "Warna : biru, orientasi: tengah",
        choice4 : "Warna : biru, orientasi: kanan",
        jawaban: 3
    }, 
    {
        pertanyaan: "Untuk mengubah warna pada background, property css yang digunakan adalah… ",
        choice1 : "background-color",
        choice2 : "color:",
        choice3 : "color-background:",
        choice4 : "background-colour:",
        jawaban: 1
    }, 
    {
        pertanyaan: "untuk membuat teks posisinya berada di kiri, property css yang digunakan adalah…",
        choice1 : "text-align: center;",
        choice2 : "text-align: left;",
        choice3 : "text-align: right;",
        choice4 : "text-align: justify;",
        jawaban: 2
    }, 
    {
        pertanyaan: "yang bukan pseudo class untuk link…",
        choice1 : ":visited",
        choice2 : ":active",
        choice3 : ":hover",
        choice4 : ":disabled",
        jawaban: 4
    }, 
    {
        pertanyaan: "untuk membuat layout yang baik menggunakan CSS, property apa yang digunakan…",
        choice1 : "float",
        choice2 : "width",
        choice3 : "margin",
        choice4 : "semua benar",
        jawaban: 4
    }, 
    {
        pertanyaan: "Yang bukan istilah yang ada dari CSS…",
        choice1 : "Tag",
        choice2 : "Property",
        choice3 : "Selector",
        choice4 : "value",
        jawaban: 1
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