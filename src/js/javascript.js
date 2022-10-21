const main_video = document.querySelector('.main-video video');
const main_video_title = document.querySelector('.main-video .title');
const video_playlist = document.querySelector('.video-playlist .videos');

let data = [
    {
        'id': 'a1',
        'title': 'SEJARAH JAVASCRIPT',
        'name': '06.SEJARAH JAVASCRIPT.mp4',
        'duration': '10:53',
    },
    {
        'id': 'a2',
        'title': 'NILAI DAN TIPE DATA PADA JAVASCRIPT',
        'name': '08.NILAI DAN TIPE DATA PADA JAVASCRIPT.mp4',
        'duration': '07:24',
    },
    {
        'id': 'a3',
        'title': 'TIPE DATA PADA JAVASCRIPT - ANGKA',
        'name': '09.TIPE DATA PADA JAVASCRIPT - ANGKA.mp4',
        'duration': '11:16',
    },
    {
        'id': 'a4',
        'title': 'OPERATOR PADA JAVASCRIPT - Aritmatika, Penugasan & Perbandingan',
        'name': '10.OPERATOR PADA JAVASCRIPT - Aritmatika, Penugasan & Perbandingan.mp4',
        'duration': '12:45',
    },
    {
        'id': 'a5',
        'title': 'OPERATOR PADA JAVASCRIPT - Logika, String, Typeof dan Kondisional',
        'name': '11.OPERATOR PADA JAVASCRIPT - Logika, String, Typeof dan Kondisional.mp4',
        'duration': '16:53',
    },
    {
        'id': 'a6',
        'title': 'TIPE DATA PADA JAVASCRIPT - STRING',
        'name': '12.TIPE DATA PADA JAVASCRIPT - STRING.mp4',
        'duration': '13:58',
    },
    {
        'id': 'a7',
        'title': 'TIPE DATA pada JAVASCRIPT - BOOLEAN',
        'name': '13.TIPE DATA pada JAVASCRIPT - BOOLEAN.mp4',
        'duration': '13:40',
    },
    {
        'id': 'a8',
        'title': 'TIPE DATA pada JAVASCRIPT - BOOLEAN',
        'name': '14.VARIABLE pada JAVASCRIPT.mp4',
        'duration': '14:44',
    },
    {
        'id': 'a9',
        'title': 'CSS Dasar - 9 - Inheritance',
        'name': '15.MENULIS JAVASCRIPT.mp4',
        'duration': '05:09',
    },
    {
        'id': 'a10',
        'title': 'POPUP BOX pada JAVASCRIPT',
        'name': '16.POPUP BOX pada JAVASCRIPT.mp4',
        'duration': '18:28',
    },
    {
        'id': 'a11',
        'title': 'CONTROL FLOW pada JAVASCRIPT.mp4',
        'name': '17.CONTROL FLOW pada JAVASCRIPT.mp4',
        'duration': '07:28',
    },
    {
        'id': 'a12',
        'title': 'PENGULANGAN - WHILE pada JAVASCRIPT',
        'name': '18.PENGULANGAN - WHILE pada JAVASCRIPT.mp4',
        'duration': '18:56',
    },
    {
        'id': 'a13',
        'title': 'PENGULANGAN - TABEL PENELUSURAN.mp4',
        'name': '19.PENGULANGAN - TABEL PENELUSURAN.mp4',
        'duration': '12:49',
    },
    {
        'id': 'a14',
        'title': 'PENGULANGAN - FOR pada JAVASCRIPT',
        'name': '20.PENGULANGAN - FOR pada JAVASCRIPT.mp4',
        'duration': '14:47',
    },
    {
        'id': 'a15',
        'title': 'PENGKONDISIAN - IF ELSE pada JAVASCRIPT',
        'name': '21.PENGKONDISIAN - IF ELSE pada JAVASCRIPT.mp4',
        'duration': '09:01',
    },
    {
        'id': 'a16',
        'title': 'PENGKONDISIAN - ELSE IF pada JAVASCRIPT',
        'name': '22.PENGKONDISIAN - ELSE IF pada JAVASCRIPT.mp4',
        'duration': '12:44',
    },
    {
        'id': 'a17',
        'title': 'PENGKONDISIAN - Latihan Pengkondisian pada JAVASCRIPT',
        'name': '23.PENGKONDISIAN - Latihan Pengkondisian pada JAVASCRIPT.mp4',
        'duration': '16:25',
    },
    {
        'id': 'a18',
        'title': 'PENGKONDISIAN - SWITCH pada JAVASCRIPT',
        'name': '24.PENGKONDISIAN - SWITCH pada JAVASCRIPT.mp4',
        'duration': '17:19',
    },
    {
        'id': 'a19',
        'title': 'PENGULANGAN & PENGKONDISIAN BERSARANG pada JAVASCRIPT',
        'name': '25.PENGULANGAN & PENGKONDISIAN BERSARANG pada JAVASCRIPT.mp4',
        'duration': '15:39',
    },
    {
        'id': 'a20',
        'title': 'MEMBUAT GAME SUWIT JAWA DENGAN JAVASCRIPT',
        'name': '26.MEMBUAT GAME SUWIT JAWA DENGAN JAVASCRIPT.mp4',
        'duration': '19:28',
    },
    {
        'id': 'a21',
        'title': 'FUNCTION pada JAVASCRIPT - Intro',
        'name': '27.FUNCTION pada JAVASCRIPT - Intro.mp4',
        'duration': '18:31',
    },
    {
        'id': 'a22',
        'title': 'FUNCTION pada JAVASCRIPT - Membuat dan Menjalankan FUNCTION',
        'name': '28.FUNCTION pada JAVASCRIPT - Membuat dan Menjalankan FUNCTION.mp4',
        'duration': '19:54',
    },
    {
        'id': 'a23',
        'title': 'FUNCTION pada JAVASCRIPT - PARAMETER dan ARGUMENT',
        'name': '29.FUNCTION pada JAVASCRIPT - PARAMETER dan ARGUMENT.mp4',
        'duration': '19:04',
    },
    {
        'id': 'a24',
        'title': 'FUNCTION pada JAVASCRIPT - REFACTORING',
        'name': '30.FUNCTION pada JAVASCRIPT - REFACTORING.mp4',
        'duration': '07:01',
    },
    {
        'id': 'a25',
        'title': 'FUNCTION pada JAVASCRIPT - VARIABLE SCOPE',
        'name': '31.FUNCTION pada JAVASCRIPT - VARIABLE SCOPE.mp4',
        'duration': '16:53',
    },
    {
        'id': 'a26',
        'title': 'FUNCTION pada JAVASCRIPT - REKURSIF',
        'name': '32.FUNCTION pada JAVASCRIPT - REKURSIF.mp4',
        'duration': '12:23',
    },
    {
        'id': 'a27',
        'title': 'FUNCTION pada JAVASCRIPT - DECLARATION vs. EXPRESSION',
        'name': '33.FUNCTION pada JAVASCRIPT - DECLARATION vs. EXPRESSION.mp4',
        'duration': '09:04',
    },
    {
        'id': 'a28',
        'title': 'ARRAY pada JAVASCRIPT - Intro',
        'name': '34.ARRAY pada JAVASCRIPT - Intro.mp4',
        'duration': '17.45',
    },
    {
        'id': 'a29',
        'title': 'ARRAY pada JAVASCRIPT - Manipulasi ARRAY',
        'name': '35.ARRAY pada JAVASCRIPT - Manipulasi ARRAY.mp4',
        'duration': '15:03',
    },
    {
        'id': 'a30',
        'title': 'ARRAY pada JAVASCRIPT - SLICE & SPLICE',
        'name': '36.ARRAY pada JAVASCRIPT - SLICE & SPLICE.mp4',
        'duration': '06:29',
    },
    {
        'id': 'a31',
        'title': 'ARRAY pada JAVASCRIPT - FOREACH & MAP',
        'name': '37.ARRAY pada JAVASCRIPT - FOREACH & MAP.mp4',
        'duration': '07.59',
    },
    {
        'id': 'a32',
        'title': 'ARRAY pada JAVASCRIPT - FILTER & FIND',
        'name': '38.ARRAY pada JAVASCRIPT - FILTER & FIND.mp4',
        'duration': '04:20',
    },
    {
        'id': 'a33',
        'title': 'MEMBUAT PROGRAM PENGELOLAAN PENUMPANG ANGKOT dengan JAVASCRIPT',
        'name': '39.MEMBUAT PROGRAM PENGELOLAAN PENUMPANG ANGKOT dengan JAVASCRIPT.mp4',
        'duration': '21:54',
    },
    {
        'id': 'a34',
        'title': 'MEMBUAT PROGRAM PENGELOLAAN PENUMPANG ANGKOT dengan JAVASCRIPT (Bagian 2)',
        'name': '40.MEMBUAT PROGRAM PENGELOLAAN PENUMPANG ANGKOT dengan JAVASCRIPT (Bagian 2).mp4',
        'duration': '11:43',
    },
    {
        'id': 'a35',
        'title': 'OBJECT pada JAVASCRIPT - Intro',
        'name': '41.OBJECT pada JAVASCRIPT - Intro.mp4',
        'duration': '16:56',
    },
    {
        'id': 'a36',
        'title': 'OBJECT pada JAVASCRIPT - Membuat Object',
        'name': '42.OBJECT pada JAVASCRIPT - Membuat Object.mp4',
        'duration': '13:56',
    },
    {
        'id': 'a37',
        'title': 'OBJECT pada JAVASCRIPT - THIS',
        'name': '43.OBJECT pada JAVASCRIPT - THIS.mp4',
        'duration': '13:47',
    },
    {
        'id': 'a38',
        'title': 'OBJECT pada JAVASCRIPT - Latihan Object (SELESAI)',
        'name': '44.OBJECT pada JAVASCRIPT - Latihan Object (SELESAI).mp4',
        'duration': '16:11',
    },
];

data.forEach((video,i) => {
    let video_element = `<div class="video" data-id="${video.id}">
                            <img src="../image/play.svg" alt="" class="images">
                            <p>0${i+1}.</p>
                            <h3 class="title">${video.title}</h3>
                            <p class="time">${video.duration}</p>
                        </div>`;
    video_playlist.innerHTML += video_element;
});

let videos = document.querySelectorAll('.video');
console.log(videos[0]);
videos[0].classList.add('active');
videos[0].querySelector('img').src = '../../src/image/pause.svg';

videos.forEach(selected_video => {
    selected_video.addEventListener('click', () => {

        for(all_videos of videos) {
            all_videos.classList.remove('active');
            all_videos.querySelector('img').src = '../../src/image/play.svg';
        }

        selected_video.classList.add('active');
        selected_video.querySelector('img').src = '../../src/image/pause.svg';

        let match_video = data.find(video => video.id == selected_video.dataset.id)
        main_video.src = '../../src/video/js-videos/' + match_video.name;
        main_video_title.innerText = match_video.title;

    });
});