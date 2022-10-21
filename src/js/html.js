const main_video = document.querySelector('.main-video video');
const main_video_title = document.querySelector('.main-video .title');
const video_playlist = document.querySelector('.video-playlist .videos');

let data = [
    {
        'id': 'a1',
        'title': 'HTML Dasar : Pendahuluan HTML',
        'name': '01.HTML Dasar - Pendahuluan HTML (1_13).mp4',
        'duration': '15.02',
    },
    {
        'id': 'a2',
        'title': 'HTML Dasar : Hello World!',
        'name': '02.helloworld.mp4',
        'duration': '10.51',
    },
    {
        'id': 'a3',
        'title': 'HTML Dasar : Code Editor',
        'name': '03.HTML Dasar - Code Editor (3_13).mp4',
        'duration': '13.04',
    },
    {
        'id': 'a4',
        'title': 'HTML Dasar : Tag',
        'name': '04.HTML Dasar - Tag (4_13).mp4',
        'duration': '8.02',
    },
    {
        'id': 'a5',
        'title': 'HTML Dasar : Paragraf ',
        'name': '05.HTML Dasar - Paragraf (5_13).mp4',
        'duration': '7.15',
    },
    {
        'id': 'a6',
        'title': 'HTML Dasar : Heading',
        'name': '06.HTML Dasar - Heading (6_13).mp4',
        'duration': '5.05',
    },
    {
        'id': 'a7',
        'title': 'HTML Dasar : List',
        'name': '07.HTML Dasar - List (7_13).mp4',
        'duration': '6.31',
    },
    {
        'id': 'a8',
        'title': 'HTML Dasar : Hyperlink',
        'name': '08.HTML Dasar - Hyperlink (8_13).mp4',
        'duration': '15.19',
    },
    {
        'id': 'a9',
        'title': 'HTML Dasar : Image',
        'name': '09.HTML Dasar - Image (9_13).mp4',
        'duration': '7.30',
    },
    {
        'id': 'a10',
        'title': 'HTML Dasar : Table',
        'name': '10.HTML Dasar - Table (10_13).mp4',
        'duration': '8.24',
    },
    {
        'id': 'a11',
        'title': 'HTML Dasar : Table Merging',
        'name': '11.HTML Dasar - Table Merging (11_13).mp4',
        'duration': '5.27',
    },
    {
        'id': 'a12',
        'title': 'HTML Dasar : Form ',
        'name': '12.HTML Dasar - Form (12_13).mp4',
        'duration': '15.02',
    },
    {
        'id': 'a13',
        'title': 'HTML Dasar : Form (lanjutan)',
        'name': '13.HTML Dasar - Form (lanjutan) (13_13).mp4',
        'duration': '5.43',
    },
];

console.log(data.length);

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
        main_video.src = '../../src/video/html-videos/' + match_video.name;
        main_video_title.innerText = match_video.title;

    });
});