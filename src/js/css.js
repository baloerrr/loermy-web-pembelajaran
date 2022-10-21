const main_video = document.querySelector('.main-video video');
const main_video_title = document.querySelector('.main-video .title');
const video_playlist = document.querySelector('.video-playlist .videos');

let data = [
    {
        'id': 'a1',
        'title': 'CSS Dasar - 1 - Pendahuluan',
        'name': '01.CSS Dasar - 1 - Pendahuluan.mp4',
        'duration': '11:05',
    },
    {
        'id': 'a2',
        'title': 'CSS Dasar - 2 - Anatomi CSS',
        'name': '02.CSS Dasar - 2 - Anatomi CSS.mp4',
        'duration': '06:54',
    },
    {
        'id': 'a3',
        'title': 'CSS Dasar - 3 - Penempatan CSS',
        'name': '03.CSS Dasar - 3 - Penempatan CSS.mp4',
        'duration': '10:47',
    },
    {
        'id': 'a4',
        'title': 'CSS Dasar - 4 - Font Styling',
        'name': '04.CSS Dasar - 4 - Font Styling.mp4',
        'duration': '12:45',
    },
    {
        'id': 'a5',
        'title': 'CSS Dasar - 5 - Text Styling',
        'name': '05.CSS Dasar - 5 - Text Styling.mp4',
        'duration': '16:53',
    },
    {
        'id': 'a6',
        'title': 'CSS Dasar - 6 - Background',
        'name': '06.CSS Dasar - 6 - Background.mp4',
        'duration': '13:58',
    },
    {
        'id': 'a7',
        'title': 'CSS Dasar - 7 - Selector',
        'name': '07.CSS Dasar - 7 - Selector.mp4',
        'duration': '13:40',
    },
    {
        'id': 'a8',
        'title': '.CSS Dasar - 8 - Pseudo Class',
        'name': '08.CSS Dasar - 8 - Pseudo Class.mp4',
        'duration': '14:44',
    },
    {
        'id': 'a9',
        'title': 'CSS Dasar - 9 - Inheritance',
        'name': '09.CSS Dasar - 9 - Inheritance.mp4',
        'duration': '5.09',
    },
    {
        'id': 'a10',
        'title': 'CSS Dasar - 10 - Specificity',
        'name': '10.CSS Dasar - 10 - Specificity.mp4',
        'duration': '12.42',
    }
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
        main_video.src = '../../src/video/css-videos/' + match_video.name;
        main_video_title.innerText = match_video.title;

    });
});